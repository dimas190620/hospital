<?php

include('koneksi.php');

if (!$_SESSION['username']) header('Location: login.php');

if ($_GET) {
  $id = $_GET['id'];
  $query_delete = "DELETE FROM hospital WHERE id=$id";

  if (mysqli_query($conn, $query_delete)) {
    echo "<script>alert('Data Rumah Sakit dengan ID : " . $id . " berhasil dihapus!');
      document.location.href = 'index.php';
    </script>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}
