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
$mail->Host       = 'smtp.office365.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'digital360@occamsadvisory.com'; // Office365 email
$mail->Password   = 'N.442292446184uz'; // Office365 account or App Password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // ✅ Use STARTTLS
$mail->Port       = 587; // ✅ Port 587 for STARTTLS

 // Recipients
 $mail->setFrom('digital360@occamsadvisory.com', 'TEST Occams Digital Lead Form');
 $mail->addAddress('digital360@occamsadvisory.com');

 // Content
 $mail->isHTML(true);
 $mail->Subject = 'New Personal Details Submission on Occams DIgital';
 $mail->Body = "
  <div style='font-family: Arial, sans-serif; color: #333; font-size: 15px; line-height: 1.6; padding: 20px;'>
    
    <!-- Logo -->
    <div style='text-align: center; margin-bottom: 20px;'>
      <img src='https://lh3.googleusercontent.com/orAOgE5LISOxtDPtNvN3HDkBv3GLBDSjAhFLUzHU7ccrqDvZ-a8--sUUC0tEhAjQI3rI2ueArImNlN4ZE7elxuoTtFiJFUH50T0HPq2O' alt='Logo' style='max-width: 200px; height: auto;' />
    </div>

    <h2 style='color: #F36B21;'>New Lead Submitted</h2>

    <p><strong>Full Name:</strong> $fullName</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Company Name:</strong> $company</p>
    <p><strong>How did you hear about us?</strong><br>$message</p>

    <hr style='margin: 30px 0; border: none; border-top: 1px solid #ddd;' />

    <p style='font-size: 13px; color: #888;'>This message was generated from the client service agreement form on your website.</p>
  </div>
";

 $mail->send();
 echo 'success';
 } catch (Exception $e) {
 echo 'fail';
 }
}
?>