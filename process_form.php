<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Example: Send email
    $to = "eliudnelion12@gmail.com";
    $subject = "Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "<p>Thank you for your message. We will get back to you soon.</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
} else {
    echo "<p>Something went wrong. Please try again later.</p>";
}
?>