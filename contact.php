<?php
if (isset($_POST["submit"])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $subject = htmlspecialchars($_POST['subject']);

    $to = 'example@gmail.com';
    $from = 'no-reply@yourdomain.com'; 
    // Mail headers
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email Body
    $body = "From: $name\nE-Mail: $email\nSubject: $subject\n\nMessage:\n$message";

    // Sending email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html");
        exit;
    } else {
        echo "Error! Email could not be sent.";
    }
}
?>
