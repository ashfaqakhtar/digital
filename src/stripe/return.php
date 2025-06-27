
<?php
// START at very top of file
ob_start();
session_start();

header('Content-Type: application/json');
require_once '../../vendor/autoload.php';
require_once '../../secrets.php';
require_once '../../docusign.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
        if (preg_match('/^addon_(\d+)_(name|price|qty|tablabel)$/', $key, $matches)) {
            $index = $matches[1];
            $field = $matches[2];
            if (!isset($addons[$index])) {
                $addons[$index] = ['name' => '', 'price' => 0, 'qty' => 0, 'tablabel' => ''];
            }
            $addons[$index][$field] = $value;
        }
    }

    ksort($addons);
    $response['addons'] = array_values($addons);
try {
    // Optional: Send DocuSign envelope
    // Uncomment if you want to use this
    $docuResult = sendDocusignEnvelope($response['customer_name'], $response['customer_email'], $response['customer_company'], $response['addons'], $response['plan_name']);
    $response['docusign_envelope_id'] = $docuResult['envelopeId'];
    $response['docusign_status'] = 'Envelope sent'; // Or skip this line if not sending
} catch (Exception $e) {
    $response['docusign_status'] = 'Failed to send envelope';
    $response['docusign_error'] = $e->getMessage();
}

// Build Email HTML
$emailBody = "<h2 style='color:#F36B21;'>New Order Received</h2>";
$emailBody .= "<p><strong>Customer Name:</strong> {$response['customer_name']}</p>";
$emailBody .= "<p><strong>Company:</strong> {$response['customer_company']}</p>";
$emailBody .= "<p><strong>Email:</strong> {$response['customer_email']}</p>";
$emailBody .= "<p><strong>Message:</strong> {$response['customer_message']}</p>";
$emailBody .= "<hr>";
$emailBody .= "<p><strong>Selected Plan:</strong> {$response['plan_name']} – $"
           . number_format($response['plan_price']) . "</p>";

if (!empty($response['addons'])) {
    foreach ($response['addons'] as $addon) {
        $addonName = htmlspecialchars($addon['name']);
        $addonPrice = number_format($addon['price']);
        $addonQty = (int)$addon['qty'];
        $emailBody .= "<p><strong>Addon:</strong> {$addonName} – \${$addonPrice} × {$addonQty}</p>";
    }
}

$emailBody .= "<hr><p><strong>Order Date:</strong> " . date('Y-m-d H:i:s') . "</p>";

try {
    $mail = new PHPMailer(true);

    // SMTP Setup
    $mail->isSMTP();
    $mail->Host       = 'smtp.office365.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'digital360@occamsadvisory.com';
    $mail->Password   = 'N.442292446184uz'; // Use app password if 2FA is enabled
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Email settings
    $mail->setFrom('digital.occamsadvisory.com', 'Order System');
    $mail->addAddress('digital360@occamsadvisory.com'); // Recipient
    $mail->isHTML(true);
    $mail->Subject = 'Your Order Receipt from Our Store';
    $mail->Body    = $emailBody;

    $mail->send();
    $response['email_status'] = 'Email sent successfully';
} catch (Exception $e) {
    $response['email_status'] = 'Email sending failed: ' . $mail->ErrorInfo;
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
    //session_start();
    // Total amount = plan + add-ons
    $totalAmount = (int)$response['plan_price'];
    foreach ($response['addons'] as $addon) {
        $totalAmount += ((int)$addon['price']) * ((int)$addon['qty']);
    }

    //session_start();
    //ob_start();
    /*$_SESSION['order_summary'] = [
        'email' => $response['customer_email'],
        'payment_type' => 'Stripe',
        'transaction_id' => $session->payment_intent ?? $session->id,
        'amount' => $totalAmount
    ];*/

    //ob_end_clean();
    $query = http_build_query([
        'email' => $response['customer_email'],
        'amount' => $totalAmount,
        'txn' => $session->payment_intent ?? $session->id
    ]);


    echo "<meta http-equiv='refresh' content='0;url=https://digital.occamsadvisory.com/src/thank-you.php?$query'>";
    exit;
    //header("Location: https://digital.occamsadvisory.com/src/thank-you.php");
    //exit;

} catch (Exception $e) {
    http_response_code(500);
    header("Location: ".$siteurl);
    exit;
}
?>

