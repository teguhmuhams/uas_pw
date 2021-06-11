<?php
session_start();
include_once("../koneksi.php");
if (!isset($_SESSION['username'])) {
  header("Location: ../");
}
$id = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * from barang WHERE id='$id'");
if (mysqli_num_rows($tampil) == 0) {
  echo '<script>document.location = "../";</script>';
} else {
  $data = mysqli_fetch_assoc($tampil);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta nama="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <base href="../admin">
  <!-- Link Google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">

  <!-- Link CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />

  <title>MyWatch Store Indonesia - Toko Jam Tangan Original dengan Harga Terbaik!</title>

</head>

<style>
  body {
    background-color: #f3f6f9;
  }
</style>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="./">Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="tambah" class="nav-link text-primary">Tambah Barang</a>
          </li>
          <li class="nav-item">
            <a href="logout" class="nav-link btn btn-danger">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header -->
  <div class="container mt-5">
    <!--Awal Card Form -->
    <div class="card">
      <div class="card-header bg-primary text-white">
        Form Edit Data
      </div>
      <div class="card-body">
        <a href="./" class="btn btn-secondary">Kembali</a>

        <form action="./aksi_edit.php" method="POST" enctype="multipart/form-data" class="mt-3">

          <!-- hidden id dan nama file gambar -->
          <input type="hidden" name="id" id="id" value="<?php echo $data["id"]; ?>" class="form-control" required>
          <input type="hidden" name="old_file" id="old_file" value="<?php echo $data["gambar"]; ?>" class="form-control" required>
          <!-- end hidden -->

          <div class="form-group row">
            <label for="brand" class="col-sm-2">Brand</label>
            <div class="col-sm-10">
              <input type="text" name="brand" id="brand" value="<?php echo $data["brand"]; ?>" class="form-control" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-2">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" id="nama" value="<?php echo $data["nama"]; ?>" class="form-control" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="stok" class="col-sm-2">Stok</label>
            <div class="col-sm-6 col-md-2">
              <input type="number" name="stok" id="stok" value="<?php echo $data["stok"]; ?>" class="form-control" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="harga" class="col-sm-2">Harga</label>
            <div class="col-sm-6 col-md-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                </div>
                <input type="number" name="harga" id="harga" value="<?php echo $data["harga"]; ?>" class="form-control" required>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="gambar" class="col-sm-2">Gambar</label>
            <div class="col-sm-10">
              <input type="file" name="gambar" id="gambar">
            </div>
          </div>
          <button type="submit" class="btn btn-success">Ubah Data</button>
        </form>
      </div>
    </div>
    <!--Akhir Card Form -->
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>