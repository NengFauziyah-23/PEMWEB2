<?php
// Koneksi ke database
require './dbkoneksi.php';

// Cek apakah form disubmit
if (isset($_POST['submit'])) {
    
    // Gunakan switch-case untuk membedakan aksi
    switch ($_POST['submit']) {
        
        // === Tambah Data Baru ===
        case 'Simpan':
            // Ambil data dari form
            $nama = $_POST['nama'];
            $kec_id = $_POST['kec_id'];

            try {
                // Query untuk insert data ke tabel kelurahan
                $sql = "INSERT INTO kelurahan (nama, kec_id) VALUES (?, ?)";
                $stmt = $dbh->prepare($sql);
                $stmt->execute([$nama, $kec_id]);

                // Redirect ke halaman list setelah simpan
                header('Location: list-kelurahan.php');
                exit();
            } catch (\Throwable $e) {
                // Tampilkan error jika gagal insert
                echo "Error saat menambahkan data kelurahan<br>";
                echo $e;
            }
            break;

        // === Ubah Data Lama ===
        case 'Ubah':
            // Ambil data dari form (termasuk ID untuk UPDATE)
            $id = $_POST["id"];
            $nama = $_POST['nama'];
            $kec_id = $_POST['kec_id'];

            try {
                // Query untuk update data berdasarkan ID
                $sql = "UPDATE kelurahan SET nama=?, kec_id=? WHERE id=?";
                $stmt = $dbh->prepare($sql);
                $stmt->execute([$nama, $kec_id, $id]);

                // Redirect ke halaman list setelah update
                header('Location: list-kelurahan.php');
                exit();
            } catch (\Throwable $e) {
                // Tampilkan error jika gagal update
                echo "Error saat mengubah data kelurahan<br>";
                echo $e;
            }
            break;

        // === Hapus Data ===
        case 'Hapus':
            $id = $_POST['id'];

            try {
                // Query untuk hapus data berdasarkan ID
                $sql = "DELETE FROM kelurahan WHERE id=?";
                $stmt = $dbh->prepare($sql);
                $stmt->execute([$id]);

                // Redirect ke halaman list setelah delete
                header('Location: list-kelurahan.php');
                exit();
            } catch (\Throwable $e) {
                // Tampilkan error jika gagal delete
                echo "Error saat menghapus data kelurahan<br>";
                echo $e;
            }
            break;
    }
}
?>
