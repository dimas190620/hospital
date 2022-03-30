<?php

include('koneksi.php');

if (!$_SESSION['username']) header('Location: login.php');

if ($_POST) {
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $alamat = $_POST['alamat'];

  $insert_hospital = "INSERT INTO hospital (nama, jenis, alamat) VALUES ('$nama', '$jenis', '$alamat')";
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>CRUD - Input data pasien</title>
  
</head>

<body>
<?php include('navbar.php'); ?>
  <div class="container py-5">
    <div class="jumbotron jumbotron-fluid p-5">
      <div class="container">
        <h1 class="display-3">input data!!</h1>
        <!-- <p class="lead">Sekarang kamu lagi di <b>Menu Tambah Data</b> nih.</p> -->
      </div>
    </div>
    <div class="mt-5 px-4">
      <form action="" method="POST">
        <div class="row">
          <div class="col-md-6">
            <?php if ($_POST) : ?>
              <?php if (mysqli_query($conn, $insert_hospital)) : ?>
                <div class="alert alert-success" role="alert">
                  Berhasil! Data pasien berhasil ditambahkan
                </div>
              <?php else : ?>
                <div class="alert alert-warning" role="alert">
                  Maaf! Data pasien gagal ditambahkan.
                </div>
              <?php endif; ?>
            <?php endif; ?>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="nama">Nama Pasien</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="jenis">Jenis kelamin pasien</label>
              <input type="text" class="form-control" id="jenis" name="jenis" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="alamat">Alamat Pasien</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
          </div>
          <div class="col-md-6">
            <a href="index.php" class="btn btn-outline-warning btn-block"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
          </div>
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary btn-block">Input kembali data pasien</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>