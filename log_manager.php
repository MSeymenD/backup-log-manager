<?php
$config = include 'config.php';
$logFile = $config['log_path'] . 'backup.log';

echo file_exists($logFile) ? file_get_contents($logFile) : "No logs available.";
?>
