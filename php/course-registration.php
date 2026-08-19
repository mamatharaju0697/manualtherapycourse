<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../course.php');
    exit;
}

$configFile = __DIR__ . '/mail-config.php';
if (!file_exists($configFile)) {
    http_response_code(500);
    exit('Mail is not configured yet. Copy php/mail-config.example.php to php/mail-config.php and fill in your SMTP details.');
}
$config = require $configFile;

function field(string $key): string
{
    return isset($_POST[$key]) ? trim((string) $_POST[$key]) : '';
}

$name    = field('name');
$phone   = field('phone');
$email   = field('email');
$course  = field('course');
$message = field('message');

if ($name === '' || $phone === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    exit('Please fill in all required fields with a valid email address.');
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->Port       = $config['smtp_port'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_username'];
    $mail->Password   = $config['smtp_password'];
    if (!empty($config['smtp_secure'])) {
        $mail->SMTPSecure = $config['smtp_secure'];
    }

    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress($config['to_email'], $config['to_name']);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Course Registration: ' . $name;
    $mail->Body    = sprintf(
        'Name: %s<br>Phone: %s<br>Email: %s<br>Course: %s<br>Message: %s',
        htmlspecialchars($name),
        htmlspecialchars($phone),
        htmlspecialchars($email),
        htmlspecialchars($course),
        nl2br(htmlspecialchars($message))
    );

    $mail->send();

    header('Location: ../than-you-courseregistration.php');
    exit;
} catch (Exception $e) {
    http_response_code(500);
    echo 'Registration could not be sent. Error: ' . htmlspecialchars($mail->ErrorInfo);
    exit;
}
