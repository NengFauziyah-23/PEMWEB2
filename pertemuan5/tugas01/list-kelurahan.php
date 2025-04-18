<?php
require './dbkoneksi.php';

require_once './template/top.php';
require_once './template/sidebar.php';

$request = $dbh->query("SELECT * FROM kelurahan");
$list_kelurahan = $request->fetchAll();
?>        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <!-- Topbar -->    
<?php
require_once './template/topbar.php';
?>
            <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Halaman List Kelurahan</h1>

                    <!-- Card Daftar Kelurahan -->
                     <div class="card">
                     <div class="card-body">
                     <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach($list_kelurahan as $kelurahan) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $kelurahan['nama']; ?></td>
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
<?php
require_once './template/footer.php'
?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
<?php
require_once './template/bottom.php'
?>
