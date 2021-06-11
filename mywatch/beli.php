
<?php
include_once('koneksi.php');
$id = $_GET['id'];
// $q_stock = mysqli_query($koneksi, "SELECT stok FROM barang WHERE id='$id'");
// $f_stok = mysqli_fetch_assoc($q_stock);
// $stok = $f_stok['stok'];

$update = mysqli_query($koneksi, "UPDATE barang SET stok = stok - 1 WHERE id='$id'");

if ($update) {
  echo "<script>
  window.history.back();
  </script>";
} else {
  echo "<script>
  alert('Pembelian gagal!');
  window.history.back();
  </script>";
}
