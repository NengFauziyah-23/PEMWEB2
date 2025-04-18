<?php
require './dbkoneksi.php';

if (isset($_POST['submit'])) {
// Tangkap data dari form 
    $nama = $_POST['nama'];
    $kec_id = $_POST['kec_id'];

    // Proses insert ke database
    try {
    $sql = "INSERT INTO kelurahan (nama, kec_id) VALUES (?,?)" ;
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$nama, $kec_id]);
    echo "ok";
    header("location: list-kelurahan.php");
    } catch (\Throwable $e) {
        echo "Error while insert data kelurahan";
        echo $e;
    }
}