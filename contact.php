<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mail.saravanakumar008@gmail.com";
    $subject = "Contact Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // SMTP settings
    $smtp_server = "smtp.gmail.com";
    $smtp_port = 587;
    $smtp_username = "mail.saravanakumar008@gmail.com";
    $smtp_password = "ugcgmvowpfgtjlih";
    $smtp_secure = "tls"; // Use 'ssl' if required

    // Set up "From" and "Reply-To" headers
    $from_email = $email;
    $headers = "From: $from_email\r\n";
    $headers .= "Reply-To: $from_email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    // Create additional SMTP context options
    $smtp_options = [
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
        ],
    ];

    // Set up SMTP configuration
    $smtp_config = [
        "auth" => true,
        "host" => $smtp_server,
        "port" => $smtp_port,
        "username" => $smtp_username,
        "password" => $smtp_password,
        "secure" => $smtp_secure,
        "stream_context" => stream_context_create($smtp_options),
    ];

    // Send email
    if (mail($to, $subject, $message, $headers, "-f $from_email")) {
        echo "Email sent successfully!";
    } else {
        echo "Email could not be sent.";
    }
} else {
    echo "Invalid request.";
}
?>\