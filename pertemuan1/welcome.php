<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
</head>
<body>
    <h3>Selamat Belajar Web</h3>
<?php
//komentar satu baris

    $_nama = "Budi Darmawan";
    $_umur = 20;
    $_berat = 60.5;
    $_prodi = "Sistem Informasi";
    $_kampus = "STT Terpadu Nurul Fikri";
    echo "Nama saya $_nama, umur saya $_umur tahun";
    echo "<br>";
    ?>
<hr/>
<?php
    echo "Berat badan aya $_berat kg";
    echo "<br>";
    echo "Saya kuliah di prodi $_prodi";
?>
<br>Saya kuliah di kampus <strong><?= $_kampus ?></strong>
</body>
</html>