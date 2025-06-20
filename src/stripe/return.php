
<?php
// START at very top of file
ob_start();
session_start();

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
    header("Location: ".$siteurl);
    exit;
}

try {
    $session = $stripe->checkout->sessions->retrieve($session_id);
    $metadata = $session->metadata->toArray();

    $response = [
        'customer_email' => $metadata['customer_email'] ?? '',
        'customer_name' => $metadata['customer_name'] ?? '',
        'customer_company' => $metadata['customer_company'] ?? '',
        'customer_message' => $metadata['customer_message'] ?? '',
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

    try {
        // Uncomment and use if you want to send a DocuSign envelope
         $docuResult = sendDocusignEnvelope($response['customer_name'], $response['customer_email'], $response['customer_company']);
         $response['docusign_status'] = 'Envelope sent';
         $response['docusign_envelope_id'] = $docuResult['envelopeId'];
    } catch (Exception $e) {
        $response['docusign_status'] = 'Failed to send envelope';
        $response['docusign_error'] = $e->getMessage();
    }

    // Build Email HTML
    $emailBody = "<h2>New Order Received</h2>";
    $emailBody .= "<p><strong>Customer Name:</strong> {$response['customer_name']}</p>";
    $emailBody .= "<p><strong>Company:</strong> {$response['customer_company']}</p>";
    $emailBody .= "<p><strong>Email:</strong> {$response['customer_email']}</p>";
    $emailBody .= "<p><strong>Message:</strong> {$response['customer_message']}</p>";
    $emailBody .= "<hr>";
    $emailBody .= "<p><strong>Selected Plan:</strong> {$response['plan_name']} - $" . number_format($response['plan_price'] / 100, 2) . "</p>";

    foreach ($response['addons'] as $addon) {
        $addonName = htmlspecialchars($addon['name']);
        $addonPrice = number_format($addon['price'] / 100, 2);
        $addonQty = (int)$addon['qty'];
        $emailBody .= "<p><strong>Addon:</strong> {$addonName} - \${$addonPrice} x {$addonQty}</p>";
    }

    $emailBody .= "<hr><p><strong>Order Date:</strong> " . date('Y-m-d H:i:s') . "</p>";


    // If emailing:

    $to = "prakash.kadiya@occamsadvisory.com";
    $subject = "Your Order Receipt from Our Store";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: orders@example.com\r\n";

    if (!empty($to)) {
        $mailSent = mail($to, $subject, $emailBody, $headers);
        $response['email_status'] = $mailSent ? 'Email sent successfully' : 'Email sending failed';
    } else {
        $response['email_status'] = 'Email address missing';
    }

    // ✅ Save DocuSign response to a log file
    $logData = [
        'timestamp' => date('Y-m-d H:i:s'),
        'session_id' => $session_id,
        'docusign_status' => $response['docusign_status'],
        'docusign_envelope_id' => $response['docusign_envelope_id'] ?? null,
        'docusign_error' => $response['docusign_error'] ?? null,
        'customer_name' => $response['customer_name'],
        'customer_email' => $response['customer_email'],
        'customer_company' => $response['customer_company']
    ];

    $logFile = dirname(__DIR__, 2) . '/docusign_log.json';

    // Ensure the file exists (create if not)
    if (!file_exists($logFile)) {
        file_put_contents($logFile, json_encode([], JSON_PRETTY_PRINT));
    }

    $existingLogs = [];
    if (file_exists($logFile)) {
        $content = file_get_contents($logFile);
        $existingLogs = json_decode($content, true);
        if (!is_array($existingLogs)) {
            $existingLogs = [];
        }
    }

    $existingLogs[] = $logData;

    file_put_contents($logFile, json_encode($existingLogs, JSON_PRETTY_PRINT));


    // Unset previous session data
    session_unset();
    session_destroy();

    session_start();
    

    // Total amount = plan + add-ons
    $totalAmount = (int)$response['plan_price'];
    foreach ($response['addons'] as $addon) {
        $totalAmount += ((int)$addon['price']) * ((int)$addon['qty']);
    }

    $_SESSION['order_summary'] = [
        'email' => $response['customer_email'],
        'payment_type' => 'Stripe',
        'transaction_id' => $session->payment_intent ?? $session->id,
        'amount' => $totalAmount
    ];

    ob_end_clean();
    // ✅ Redirect to thank-you.php
    header("Location: {$siteurl}/thank-you.php");
    exit;

} catch (Exception $e) {
    http_response_code(500);
    header("Location: ".$siteurl);
    exit;
}
?>

