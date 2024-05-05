<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $to = "nifiseagboola@email.com"; // Replace with your email address
        $subject = "New Contact Form Submission";

        $headers = "From: $name <$email>";

        // Use wordwrap() if lines are longer than 70 characters
        $message = wordwrap($message, 70);

        // Send the email
        mail($to, $subject, $message, $headers);

        echo "Thank you for your message! We'll get back to you soon.";
    }
?>