<?php
$config = include 'config.php';
$logFile = $config['log_path'] . 'backup.log';

if ($config['email']['enabled']) {
    $to = $config['email']['to'];
    $subject = "Backup Status";
    $message = file_get_contents($logFile);
    $headers = "From: " . $config['email']['from'];
    mail($to, $subject, $message, $headers);
}
?>