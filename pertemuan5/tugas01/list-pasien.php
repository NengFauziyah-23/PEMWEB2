<?php
require './dbkoneksi.php';

// Jalankan query ke tabel pasien
$sql = "SELECT * FROM pasien";
$query = $dbh->query($sql);

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
            <h1 class="h3 mb-4 text-gray-800">Halaman List Pasien</h1>

            <!-- Card Daftar Pasien -->
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $pasien) : ?>
                                <tr>
                                    <td><?= $pasien['kode'] ?></td>
                                    <td><?= $pasien['nama'] ?></td>
                                    <td><?= $pasien['gender'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                                    <td><?= $pasien['tmp_lahir'] ?></td>
                                    <td><?= $pasien['email'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

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
