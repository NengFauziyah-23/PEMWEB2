<?php 

// Variable user
$nama_depan = "neng";
$nama_tengah = 'fauziyah';
$nama_belakang = "hasanah";
$umur = 20;
$tb = 150.9;

$daftar_nama = "neng". "hasanah";
echo $nama_depan .  " " . $nama_belakang;
echo "<br>Nama saya adalah $nama_depan
dan saya berumur $umur";

echo "<br /><br />";
echo 'Dokumen root' . $_SERVER ["DOCUMENT_ROOT"];

// variable System
define('PHI', 3.14);

$r = 8;
$luas = PHI * $r * $r;

echo "Lingkungan dengan jari-jari {$r}cm memiliki luas {$luas}cm2";

?>