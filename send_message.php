<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Get form data and sanitize
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) ?? '';
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '';
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING) ?? 'New Contact Form Submission';
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING) ?? '';

// Check if required fields are empty
if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ebisagutema4@gmail.com'; 
    $mail->Password   = 'owlamqbfxetnqwon'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('ebisagutema4@gmail.com', 'Ebisa Gutema Portfolio');
    $mail->addAddress('ebisagutema4@gmail.com');           

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Message: ' . $subject;
    $mail->Body    = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                h2 { color: #4f46e5; border-bottom: 1px solid #eee; padding-bottom: 10px; }
                .message-details { background: #f9f9f9; padding: 15px; border-radius: 5px; }
                .footer { margin-top: 20px; font-size: 12px; color: #777; }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2>New Contact Form Submission</h2>
                <div class='message-details'>
                    <p><strong>Name:</strong> {$name}</p>
                    <p><strong>Email:</strong> {$email}</p>
                    <p><strong>Subject:</strong> {$subject}</p>
                    <p><strong>Message:</strong><br>{$message}</p>
                </div>
                <div class='footer'>
                    <p>This message was sent from your portfolio contact form.</p>
                </div>
            </div>
        </body>
        </html>
    ";
    $mail->AltBody = "Name: {$name}\nEmail: {$email}\nSubject: {$subject}\nMessage: {$message}";

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Your message has been sent successfully!']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => "Message could not be sent. Error: {$mail->ErrorInfo}"]);
}
?>