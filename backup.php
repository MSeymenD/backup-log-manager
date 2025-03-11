<?php
$config = include 'config.php';
$backupPath = $config['backup_path'] . 'backup_' . date('Ymd_His') . '.zip';

$zip = new ZipArchive();
if ($zip->open($backupPath, ZipArchive::CREATE) === TRUE) {
    foreach ($config['backup_directories'] as $dir) {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir), RecursiveIteratorIterator::LEAVES_ONLY);
        foreach ($files as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($dir) + 1);
                $zip->addFile($filePath, $relativePath);
            }
        }
    }
    $zip->close();
    file_put_contents($config['log_path'] . 'backup.log', date('Y-m-d H:i:s') . " Backup successful: $backupPath\n", FILE_APPEND);
} else {
    file_put_contents($config['log_path'] . 'backup.log', date('Y-m-d H:i:s') . " Backup failed\n", FILE_APPEND);
}
?>
