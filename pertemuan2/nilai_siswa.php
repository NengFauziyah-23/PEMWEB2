<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_nilai_uts = $_POST['nilai_uts'];
    $_nilai_uas = $_POST['nilai_uas'];
    $_nilai_tugas = $_POST['nilai_tugas'];

    echo "<p>Nama : $nama</p>";
    echo "<p>Mata Kuliah : $_matkul</p>";
    echo "<p>Nilai UTS : $_nilai_uts</p>";
    echo "<p>Nilai UAS : $_nilai_uas</p>";
    echo "<p>Nilai Tugas/Praktikum : $_nilai_tugas</p>";
    
    //Status Kelulusan
    $nilai_total = ($_nilai_uts * 0.3) + ($_nilai_uas * 0.35) + ($_nilai_tugas * 0.35);

    // Check Nilai Toltal
    if($nilai_total > 55) {
        echo "<P>Status : Lulus</p>";
    } else {
        echo "<p>Status : Tidak Lulus</p>";
    }
    // Grade Nilai
}
?>