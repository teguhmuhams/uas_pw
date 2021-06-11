<?php
include_once('../koneksi.php');

$brand = $_POST['brand'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$folder = "../img/products/";

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

$gambar = $name;

if ($upload) {
  $tambah = mysqli_query(
    $koneksi,
    "INSERT INTO barang (brand, nama, harga, stok, gambar) VALUES ('$brand', '$nama', '$harga', '$stok', '$gambar')"
  );

  if ($tambah) {
    echo "<script>
  alert('Tambah data berhasil!');
  document.location='../admin/';
  </script>";
  } else {
    echo "<script>
  alert('Tambah data gagal !');
  document.location='../admin/';
  </script>";
  }
}
