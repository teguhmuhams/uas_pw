<?php
include_once('top.php');
?>

<div class="container mt-5">
  <!--Awal Card Form -->
  <div class="card">
    <div class="card-header bg-primary text-white">
      Form Edit Data
    </div>
    <div class="card-body">
      <a href="./" class="btn btn-secondary">Kembali</a>

      <form action="aksi_tambah.php" method="POST" enctype="multipart/form-data" class="mt-3">
        <div class="form-group row">
          <label for="brand" class="col-sm-2">Brand</label>
          <div class="col-sm-10">
            <input type="text" name="brand" id="brand" class="form-control" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-sm-2">Nama</label>
          <div class="col-sm-10">
            <input type="text" name="nama" id="nama" class="form-control" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="stok" class="col-sm-2">Stok</label>
          <div class="col-sm-6 col-md-2">
            <input type="number" name="stok" id="stok" class="form-control" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="harga" class="col-sm-2">Harga</label>
          <div class="col-sm-6 col-md-2">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input type="number" name="harga" id="harga" class="form-control" required>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="gambar" class="col-sm-2">Gambar</label>
          <div class="col-sm-10">
            <input type="file" name="gambar" id="gambar" required>
          </div>
        </div>
        <button type="submit" class="btn btn-success">Tambah Data</button>
      </form>
    </div>
  </div>
  <!--Akhir Card Form -->
</div>

<?php include_once('bottom.php') ?>