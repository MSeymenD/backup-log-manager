<?php
return [
    'backup_directories' => [
        '/var/www/html',
        '/home/user/documents'
    ],
    'backup_path' => __DIR__ . '/backups/',
    'log_path' => __DIR__ . '/logs/',
    'database' => [
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'name' => 'your_database',
    ],
    'email' => [
        'enabled' => false,
        'to' => 'admin@example.com',
        'from' => 'noreply@example.com'
    ]
];
?>
