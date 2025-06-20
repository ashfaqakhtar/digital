<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST["fullname"]);
    $email = htmlspecialchars($_POST["email"]);
    $company = htmlspecialchars($_POST["company"]);
    $message = htmlspecialchars($_POST["message"]);

    $mail = new PHPMailer(true);

    try {
        // SMTP setup
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contact@anokheetyres.com'; // your Gmail
        $mail->Password   = '2024@Anokheetyre'; // App password (not your Gmail password)
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('contact@anokheetyres.com', 'Website Form');
        $mail->addAddress('contact@anokheetyres.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Personal Details Submission';
        $mail->Body    = "
            <strong>Full Name:</strong> $fullName<br>
            <strong>Email:</strong> $email<br>
            <strong>Company:</strong> $company<br>
            <strong>Message:</strong><br>$message
        ";

        $mail->send();
        echo 'success';
    } catch (Exception $e) {
        echo 'fail';
    }
}
?>
