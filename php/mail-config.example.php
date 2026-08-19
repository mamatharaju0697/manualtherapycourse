<?php
// Copy this file to mail-config.php and fill in real values.
// mail-config.php is gitignored so real credentials never get committed.

return [
    'smtp_host'       => 'sandbox.smtp.mailtrap.io', // e.g. smtp.gmail.com or your host's SMTP
    'smtp_port'       => 2525,
    'smtp_username'   => 'your-mailtrap-username',
    'smtp_password'   => 'your-mailtrap-password',
    'smtp_secure'     => '',   // 'tls', 'ssl', or '' for none (Mailtrap sandbox usually needs none/tls)
    'from_email'      => 'no-reply@manualtherapycourse.test',
    'from_name'       => 'Manual Therapy Course Website',
    'to_email'        => 'recipient@example.com', // where registrations get delivered
    'to_name'         => 'Manual Therapy Course Admin',
];
