<?php
include_once('../koneksi.php');

$id = $_POST['id'];
$brand = $_POST['brand'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$folder = "../img/products/";
$old_file = $_POST['old_file'];

$upload = false;
// query gambar

$temp = $_FILES['gambar']['tmp_name'];


if ($temp != '') {
  $name = rand(0, 9999) . $_FILES['gambar']['name'];
  $size = $_FILES['gambar']['size'];
  $type = $_FILES['gambar']['type'];

  if ($type == "image/png" or $type == "image/jpg" or $type == "image/jpeg") {
    if ($size < 2048000) {
      $upload = true;
      move_uploaded_file($temp, $folder . $name);
      unlink($folder . $old_file);
    } else {
      "<script>
      alert('File gambar terlalu besar');
      window.history.back();
      </script>";
    }
  } else {
    echo "<script>
    alert('File gambar harus jpg/png');
    window.history.back();
    </script>";
  }
}

if ($upload) {
  // query update data dengan gambar
  $query = "UPDATE barang SET
      nama='$nama',
      brand='$brand',
      harga='$harga',
      gambar='$name',
      stok='$stok'
      WHERE id='$id' ";

  $ubah = mysqli_query($koneksi, $query);
} else {
  // query upadte data tanpa gambar
  $query = "UPDATE barang SET
  nama='$nama',
  brand='$brand',
  harga='$harga',
  stok='$stok'
  WHERE id='$id' ";

  $ubah = mysqli_query($koneksi, $query);
}

if ($ubah) {
  echo "<script>
  alert('Ubah data berhasil!');
  document.location='../admin/';
  </script>";
} else {
  echo "<script>
  alert('Ubah data gagal !');
  document.location='../admin/';
  </script>";
}
