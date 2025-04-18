<?php
// 1) variable untuk koneksi database
$host = "localhost";
$dbname = "dbpuskesmas";
$username = "root";
$password = "";
$charset = "utf8mb4";

// 2) membuat DSN dan akses database
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $dbh = new PDO($dsn, $username, $password, $options);
    echo "Database connected.";
} catch (\Throwable $th){
    echo "Database connection error: " . $th;
}
?>
