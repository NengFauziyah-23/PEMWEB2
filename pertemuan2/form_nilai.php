<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai Mahasiswa</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="card">
    <div class="card-body">
    <h5 class="card-title">Form Nilai Mahasiswa</h5>
    <form method="post" action="./nilai_siswa.php">
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-card"></i>
            </div>
          </div> 
          <input id="nama" name="nama" type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
      <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
          <option value="DDP">Dasar Dasar Pemrograman</option>
          <option value="PW1">Pemrograman Web 1</option>
          <option value="PW2">Pemrograman Web 2</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
      <div class="col-8">
        <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
      <div class="col-8">
        <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
      <div class="col-8">
        <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
      </div>
          </div>
        </form>
      </div>
    </div>
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
}
?>

</body>
</html>