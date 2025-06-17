<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST["fullname"]);
    $email = htmlspecialchars($_POST["email"]);
    $company = htmlspecialchars($_POST["company"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "vijay7498@gmail.com";
    $subject = "New Personal Details Submission";

    $body = "
        <strong>Full Name:</strong> $fullName<br>
        <strong>Email:</strong> $email<br>
        <strong>Company:</strong> $company<br>
        <strong>Message:</strong><br>$message
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: no-reply@yourdomain.com\r\n"; // Or use $email

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "fail";
    }
}
?>
