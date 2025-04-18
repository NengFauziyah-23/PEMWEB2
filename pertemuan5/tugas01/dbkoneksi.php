<?php
$host = 'localhost';
$dbname = 'dbpuskesmas';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $dbh = new PDO($dsn, $user, $pass, $options);
} catch (\Throwable $e) {
    echo "Connection error: " . $e->getMessage(); // <- ini bagian yang diperbaiki
}
?>
