<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>
</head>
<body style="background-color: pink;">
<div class="container mt-4">
    <form method="POST">
        <h5>Form Belanja</h5>
        <div class="row">
            <!-- Form Input on the left -->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="Customer" class="col-4 col-form-label">Nama Customer</label> 
                    <div class="col-8">
                        <input id="Customer" name="Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="Produk" id="Produk_0" type="radio" class="custom-control-input" value="TV"> 
                            <label for="Produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="Produk" id="Produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                            <label for="Produk_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="Produk" id="Produk_2" type="radio" class="custom-control-input" value="MESIN_CUCI"> 
                            <label for="Produk_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                        <input id="Jumlah" name="Jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>

            <!-- Tabel Harga Produk on the right -->
            <div class="col-md-6">
                <table class="table table-bordered" style="background-color: #40E0D0;">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV</td>
                            <td>Rp 1,000,000</td>
                        </tr>
                        <tr>
                            <td>Kulkas</td>
                            <td>Rp 3,100,000</td>
                        </tr>
                        <tr>
                            <td>Mesin Cuci</td>
                            <td>Rp 3,800,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['Customer'];
            $produk = $_POST['Produk'];
            $jumlah = $_POST['Jumlah'];

            $harga = [
                "TV" => 1000000,
                "KULKAS" => 3100000,
                "MESIN_CUCI" => 3800000
            ];

            $total = $harga[$produk] * $jumlah;

            echo "<p>Nama Customer: $nama</p>";
            echo "<p>Produk: $produk</p>";
            echo "<p>Harga Total: Rp " . number_format($total, 0, ',', '.') . "</p>";
        }
        ?>
    </form>
</div>
</body>
</html>
