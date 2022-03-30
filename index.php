<?php

include('koneksi.php');
$hospitals = mysqli_query($conn, "SELECT * FROM hospital");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>CRUD</title>
</head>

<body>
<?php include('navbar.php'); ?>
  <div class="container py-5">
    <h1>Data Rumah Sakit</h1>
    <?php if (isset($_SESSION['username'])) : ?>
      <a class="btn btn-primary mb-4" href="tambah.php">Tambah Data Rumah Sakit</a>
    <?php endif; ?>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis</th>
          <th scope="col">Alamat</th>
          
          <?php if (isset($_SESSION['username'])) : ?>
          <th scope="col" class="text-center">Aksi</th>
    <?php endif; ?>
        </tr>
      </thead>
      <tbody>
        <?php if (mysqli_num_rows($hospitals) > 0) : ?>
          <?php $number = 0; ?>
          <?php while ($hospital = mysqli_fetch_assoc($hospitals)) { ?>
            <tr>
              <th scope="row"><?= ++$number; ?></th>
              <td><?= $hospital['nama']; ?></td>
              <td><?= $hospital['jenis']; ?></td>
              <td><?= $hospital['alamat']; ?></td>
             
              <?php if (isset($_SESSION['username'])) : ?>
                <td class="text-center">
                <a href="edit.php?id=<?= $hospital['id']; ?>" class="btn btn-warning"><i class="far fa-edit"></i> Ubah</a>
                <a href="delete.php?id=<?= $hospital['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
              </td>
    <?php endif; ?>
            </tr>
          <?php } ?>
        <?php else : ?>
          <tr>
            <td colspan="6" class="text-center">Tidak ada Data Rumah Sakit</td>
          </tr>
        <?php endif;  ?>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>