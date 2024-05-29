<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address (your email)
    $to = "karthikajayakumar29@gmail.com"; // Replace with your email address

    // Set email subject
    $subject = "New Contact Form Submission";

    // Build the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email";

    // Attempt to send the email
    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo "Thank you! Your message has been sent.";
    } else {
        // Error sending email
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Redirect to the contact page if accessed directly
    header("Location: contact.html");
    exit();
}
?>
