<?php
header('Content-Type: application/json');
require_once '../../vendor/autoload.php';
require_once '../../secrets.php';
require_once '../../docusign.php';

$stripe = new \Stripe\StripeClient([
    "api_key" => $stripeSecretKey,
    "stripe_version" => "2025-05-28.basil"
]);

$session_id = $_GET['session_id'] ?? null;

if (!$session_id) {
    echo json_encode(['error' => 'Missing session_id']);
    exit;
}

try {
    $session = $stripe->checkout->sessions->retrieve($session_id);

    $metadata = $session->metadata->toArray(); // ✅ Convert to array

    $response = [
        'customer_email' => $metadata['customer_email'] ?? '',
        'customer_name' => $metadata['customer_name'] ?? '',
        'customer_company' => $metadata['customer_company'] ?? '',
        'plan_name' => $metadata['plan_name'] ?? '',
        'plan_price' => $metadata['plan_price'] ?? 0,
        'addons' => []
    ];

    $addons = [];
    foreach ($metadata as $key => $value) {
        if (preg_match('/^addon_(\d+)_(name|price|qty)$/', $key, $matches)) {
            $index = $matches[1];
            $field = $matches[2];
            if (!isset($addons[$index])) {
                $addons[$index] = ['name' => '', 'price' => 0, 'qty' => 0];
            }
            $addons[$index][$field] = $value;
        }
    }

    ksort($addons);
    $response['addons'] = array_values($addons);

    //Docusign Mail
    try {
        $docuResult = sendDocusignEnvelope($response['customer_name'], $response['customer_email'], $response['customer_company']);

        $response['docusign_status'] = 'Envelope sent';
        $response['docusign_envelope_id'] = $docuResult['envelopeId'];

    } catch (Exception $e) {
        $response['docusign_status'] = 'Failed to send envelope';
        $response['docusign_error'] = $e->getMessage();
    }

    // ✅ Build Email Content
    $emailBody  = "<h2>New Order Received</h2>";
    $emailBody .= "<p><strong>Customer Name:</strong> {$response['customer_name']}</p>";
    $emailBody .= "<p><strong>Company:</strong> {$response['customer_company']}</p>";
    $emailBody .= "<p><strong>Email:</strong> {$response['customer_email']}</p>";
    $emailBody .= "<p><strong>Message:</strong> {$response['customer_message']}</p>";
    $emailBody .= "<hr>";
    $emailBody .= "<p><strong>Selected Plan:</strong> {$response['plan_name']} - $" . number_format($response['plan_price'] / 100, 2) . "</p>";

    if (!empty($response['addons']) && is_array($response['addons'])) {
        foreach ($response['addons'] as $addon) {
            $addonName  = htmlspecialchars($addon['name']);
            $addonPrice = number_format($addon['price'] / 100, 2);
            $addonQty   = (int) $addon['qty'];
            $emailBody .= "<p><strong>Addon:</strong> {$addonName} - ${$addonPrice} x {$addonQty}</p>";
        }
    }

    $emailBody .= "<hr>";
    $emailBody .= "<p><strong>Order Date:</strong> " . date('Y-m-d H:i:s') . "</p>";


    // ✅ Send Email
    $to = "prakash.kadiya@occamsadvisory.com";
    $subject = "Your Order Receipt from Our Store";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: orders@example.com\r\n";

    if (!empty($to)) {
        $mailSent = mail($to, $subject, $emailBody, $headers);

        if ($mailSent) {
            // You can log this or include it in the response
            $response['email_status'] = 'Email sent successfully';
        } else {
            $response['email_status'] = 'Email sending failed';
        }
    } else {
        $response['email_status'] = 'Email address missing';
    }

    echo json_encode($response);


} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
