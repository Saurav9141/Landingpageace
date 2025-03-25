<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> ACE, Sec 12, Noida Extension! </title>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="canonical" href="https://fusionhome.co.in" />

    <meta name="description"
        content="Elevate Your Lifestyle at ACE, Noida Extension! " />
    </head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "chatwidvinay@gmail.com";  // Replace with your email address
    $subject = "ACE Form Submission";
    $headers = "From: $email";
    
    // Format the email message
    $email_message = "Name: $name\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";
    
    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "An error occurred. Please try again later.";
    }
}
?>



</body>
</html>








