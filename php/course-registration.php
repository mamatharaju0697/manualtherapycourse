<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../course.php');
    exit;
}

$toEmail = 'mamatha@rightturn.co.in';

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

$subject = 'New Course Registration: ' . $name;
$body    = "Name: $name\nPhone: $phone\nEmail: $email\nCourse: $course\nMessage: $message";
$headers = "From: $email\r\n" .
    "Reply-To: $email\r\n" .
    "Content-type: text/plain; charset=UTF-8\r\n";

if (mail($toEmail, $subject, $body, $headers)) {
    header('Location: ../than-you-courseregistration.php');
    exit;
}

http_response_code(500);
exit('Registration could not be sent. Please try again later.');
