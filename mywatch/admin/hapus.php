<?php
session_start();
include_once('../koneksi.php');
if (!isset($_SESSION['username'])) {
  header("Location: ../");
}

$id = $_GET["id"];

// Hapus gambar dari direktori
$folder = "../img/products/";
$q_gambar = mysqli_query($koneksi, "SELECT gambar from barang WHERE id='$id'");
$f_gambar = mysqli_fetch_assoc($q_gambar);

$nama_file = $f_gambar['gambar'];
unlink($folder . $nama_file);

$hapus = mysqli_query($koneksi, "DELETE FROM barang WHERE id='$id'");

if ($hapus) {
  echo "<script>
document.location='../';
</script>";
} else {
  echo "<script>
alert('Hapus data gagal !');
document.location='../';
</script>";
}
