<?php

include('koneksi.php');

if (!$_SESSION['username']) header('Location: login.php');


$telah_diubah = false;

if ($_GET) {
  $id = $_GET['id'];
  $query_get = "SELECT * FROM hospital WHERE id=$id";

  $result_data = mysqli_query($conn, $query_get);
}

if ($_POST) {
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $alamat = $_POST['alamat'];

  $query_update = "UPDATE hospital SET nama='$nama', jenis='$jenis', alamat='$alamat' WHERE id='$id'";

  if (mysqli_query($conn, $query_update)) {
    $telah_diubah = true;
    $result_data = mysqli_query($conn, $query_get);
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>CRUD - Edit</title>
</head>

<body>
  <?php include('navbar.php'); ?>
  <div class="container mt-5">
    <div class="jumbotron jumbotron-fluid p-5">
      <div class="container">
        <h1 class="display-3">Ubah Rumah Sakit</h1>
        <!-- <p class="lead">Sekarang kamu lagi di <b>Menu Tambah Buku</b> nih.</p> -->
      </div>
    </div>
    <div class="mt-5 px-4">
      <?php if (mysqli_num_rows($result_data) > 0) : ?>
        <?php while ($hospital = mysqli_fetch_assoc($result_data)) { ?>
          <form action="" method="POST">
            <div class="row">
              <div class="col-md-12">
                <?php if ($_POST) : ?>
                  <?php if ($telah_diubah == true) : ?>
                    <div class="alert alert-success" role="alert">
                      Berhasil! Data Rumah Sakit berhasil diubah.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php else : ?>
                    <div class="alert alert-warning" role="alert">
                      Maaf! Data Rumah Sakit gagal diubah.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nama">Nama Rumah Sakit</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $hospital['nama'] ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="jenis">Jenis Rumah Sakit</label>
                  <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $hospital['jenis'] ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="alamat">Tahun Terbit Buku</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $hospital['alamat'] ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <a href="index.php" class="btn btn-outline-warning btn-block"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
              </div>
              <div class="col-md-6">
                <button type="submit" class="btn btn-primary btn-block">Ubah Rumah Sakit</button>
              </div>
            </div>
          </form>
        <?php } ?>
      <?php else : ?>
        ID tidak ditemukan
      <?php endif; ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>