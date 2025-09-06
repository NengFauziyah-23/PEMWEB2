<?php
require './dbkoneksi.php';

// Tangkap parameter id secara aman
$id = $_GET['id'] ?? null;

// Default data kosong (untuk form kosong saat tambah)
$kelurahan = ['kec_id' => '', 'nama' => ''];

// Jika ada ID, ambil data kelurahan berdasarkan ID
if ($id) {
    $query = $dbh->query("SELECT * FROM kelurahan WHERE id=$id");
    $kelurahan = $query->fetch();
}

// Judul halaman (tetap "Tambah Kelurahan" meskipun sedang edit)
$judul = "Tambah Kelurahan";

// Label tombol tetap "Simpan"
$proses = "Simpan";

// Include template atas
require_once './template/top.php';
?>

<!-- Sidebar -->
<?php require_once './template/sidebar.php'; ?>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->    
        <?php require_once './template/topbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>

            <!-- Form Kelurahan -->
            <form action="proses-kelurahan.php" method="post">
                <?php if ($id): ?>
                    <input type="hidden" name="id" value="<?= $id ?>">
                <?php endif; ?>

                <div class="form-group row">
                    <label for="kec_id" class="col-4 col-form-label">Kecamatan ID</label> 
                    <div class="col-8">
                        <input id="kec_id" name="kec_id" type="number" min="1" class="form-control" required value="<?= ($kelurahan['kec_id']) ?>">
                    </div>
                </div> 

                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Kelurahan</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control" required value="<?= ($kelurahan['nama']) ?>">
                    </div>
                </div> 

                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <!-- Tombol submit -->
                        <input type="submit" name="submit" class="btn btn-primary" value="<?= $proses ?>">
                    </div>
                </div>
            </form>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php require_once './template/footer.php'; ?>
    <!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->

<?php require_once './template/bottom.php'; ?>
