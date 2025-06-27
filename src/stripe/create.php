<?php
ob_clean();
header('Content-Type: application/json');
require_once '../../vendor/autoload.php';
require_once '../../secrets.php';

$stripe = new \Stripe\StripeClient([
    "api_key" => $stripeSecretKey,
    "stripe_version" => "2025-05-28.basil"
]);


$input = json_decode(file_get_contents('php://input'), true);

$customer_email = $input['customer']['email'] ?? null;
$customer_name = $input['customer']['fullName'] ?? null;
$customer_company = $input['customer']['company'] ?? null;
$customer_message = $input['customer']['message'] ?? null;

$metadata = [
    'plan_name' => $input['plan']['name'],
    'plan_price' => $input['plan']['amount'],
    'customer_email' => $customer_email,
    'customer_name' => $customer_name,
    'customer_company' => $customer_company,
    'customer_message' => $customer_message,
];

$totalAmount = $input['plan']['amount'] ?? 0;

if (!empty($input['addons'])) {
    foreach ($input['addons'] as $index => $addon) {
        $metadata["addon_{$index}_name"] = $addon['name'];
        $metadata["addon_{$index}_price"] = $addon['amount'];
        $metadata["addon_{$index}_qty"] = $addon['quantity'];
        $metadata["addon_{$index}_tablabel"] = $addon['tablabel'];

         // Multiply addon amount by quantity
        $totalAmount += $addon['amount'] * $addon['quantity'];
    }
}

if ($input) {
    $line_items[] = [
        'price' => $input['plan']['price_id'],
        'quantity' => 1
    ];
    if($input['addons']) {
        foreach ($input['addons'] as $addon) {
            $line_items[] = [
                'price' => $addon['price_id'],
                'quantity' => $addon['quantity']
            ];
        }
    }

    try {

        $checkout_session = $stripe->checkout->sessions->create([
            'ui_mode' => 'custom',
            'line_items' => $line_items,
            'mode' => 'subscription',
            'return_url' => $siteurl . '/stripe/return.php?session_id={CHECKOUT_SESSION_ID}',
            'metadata' => $metadata,
        ]);

       echo json_encode([
            'clientSecret' => $checkout_session->client_secret,
            'totalAmount' => $totalAmount
        ]);

    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
}



