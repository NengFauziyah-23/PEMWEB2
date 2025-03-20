<?php
require_once 'class_nilaimahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Rizki Farhan Hasan";
$mhs1->matakuliah = "Pemrograman Web";
$mhs1->nilai_tugas = 80;
$mhs1->nilai_uts = 75;
$mhs1->nilai_uas = 85;

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "Ainun Nisa";
$mhs2->matakuliah = "Dasar-Dasar Pemrograman";
$mhs2->nilai_tugas = 90;
$mhs2->nilai_uts = 60;
$mhs2->nilai_uas = 88;

$mhs3 = new NilaiMahasiswa();
$mhs3->nama = "Bedu Bahlil";
$mhs3->matakuliah = "Pemrograman Web";
$mhs3->nilai_tugas = 60;
$mhs3->nilai_uts = 50;
$mhs3->nilai_uas = 55;

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];

?>

<h2 style="text-align:center">Daftar Nilai Mahasiswa</h2>
<table border="1" cellspacing="2" cellspacing="2" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Nilai Tugas</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Kelulusan</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach($ar_mahasiswa as $obj){

        ?>
        <tr>
            <td><?=$no ?></td>
            <td><?=$obj->nama; ?></td>
            <td><?=$obj->matakuliah; ?></td>
            <td><?=$obj->nilai_tugas; ?></td>
            <td><?=$obj->nilai_uts; ?></td>
            <td><?=$obj->nilai_uas; ?></td>
            <td><?=$obj->getNilaiAkhir(); ?></td>
            <td><?=$obj->Kelulusan(); ?></td>
        </tr>
        <?php
            $no++;
        }

        if(isset($_POST["submit"])) {
            $nama = $_POST["nama"];
            $matkul = $_POST["matkul"];
            $tugas = $_POST["nilai_tugas"];
            $uts = $_POST["nilai_uts"];
            $uas = $_POST["nilai_uas"];
            $mhs4 = new NilaiMahasiswa();
            $mhs4->nama = $nama;
            $mhs4-> matakuliah = $matkul;
            $mhs4-> nilai_tugas = $tugas;
            $mhs4-> nilai_uts = $uts;
            $mhs4-> nilai_uas = $uas;

            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$nama</td>";
            echo "<td>$matkul</td>";
            echo "<td>$tugas</td>";
            echo "<td>$uts</td>";
            echo "<td>$uas</td>";
            echo "<td>". $mhs4->getNilaiAkhir() ."</td>";
            echo "<td>". $mhs4->Kelulusan() ."</td>";
        }
        ?>

    </tbody>
</table>
