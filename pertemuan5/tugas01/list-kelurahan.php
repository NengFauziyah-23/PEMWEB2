<?php
require './dbkoneksi.php';

// Query Database
$query = $dbh->query("SELECT * FROM kelurahan");
$list_kelurahan = $query ? $query->fetchAll() : [];

$title = "Daftar Kelurahan";
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
            <h1 class="h3 mb-4 text-gray-800">Halaman List Kelurahan</h1>

            <!-- Tombol Tambah -->
            <a href="form-kelurahan.php?id=<?= $kelurahan['id'] ?>">
                 <i class="fas fa-edit"></i>
            </a>

            <a href="form-kelurahan.php" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Kelurahan
            </a>

            <!-- Card Daftar Kelurahan -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kecamatan ID</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($list_kelurahan)) : ?>
                                <?php foreach ($list_kelurahan as $idx => $kelurahan) : ?>
                                    <tr>
                                        <td><?= $idx + 1 ?></td>
                                        <td><?= htmlspecialchars($kelurahan['nama']) ?></td>
                                        <td><?= htmlspecialchars($kelurahan['kec_id']) ?></td>
                                        <td class="d-flex">
                                            <a href="form-kelurahan.php?id=<?= $kelurahan['id'] ?>" class="btn btn-sm btn-outline-warning mr-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="proses-kelurahan.php" method="post" onsubmit="return confirm('Yakin ingin hapus?')">
                                                <input type="hidden" name="id" value="<?= $kelurahan['id'] ?>">
                                                <button class="btn btn-sm btn-outline-danger" type="submit" name="submit" value="Hapus">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="4" class="text-center">Belum ada data kelurahan.</td>
                                </tr>
                            <?php endif; ?>
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
