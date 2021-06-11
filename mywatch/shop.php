<?php
include_once("top.php");
$q_barang = mysqli_query($koneksi, "SELECT * FROM barang");
?>

<div class="container mt-3" id="shop" class="shop">
  <h2 class="title display-4 text-center">Shop</h2>
  <div class="row">
    <?php while ($data =  mysqli_fetch_assoc($q_barang)) : ?>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="card product">
          <img class="card-img-top" src="img/products/<?= $data['gambar']; ?>" alt="<?= $data['brand'] ?>">
          <div class="card-body">
            <div class="product-info">
              <p class="product-brand"><?= $data['brand']; ?></p>
              <div class="stars">
                <span class="material-icons">star</span>
                <span class="material-icons">star</span>
                <span class="material-icons">star</span>
                <span class="material-icons">star</span>
                <span class="material-icons">star</span>
              </div>
            </div>
            <div class="product-info mb-0">
              <h5><?= $data['nama']; ?></h5>
              <h5>$<?= $data['harga']; ?></h5>
            </div>
            <div class="product-info">
              <p>Stok: <?= $data['stok']; ?></p>
            </div>
            <?php if ($data['stok'] == 0) : ?>
              <button type="button" class="btn btn-secondary w-100">Stok Habis!</a>
              <?php else : ?>
                <button type="button" class="btn btn-primary w-100" onclick="confirmBeli(<?= $data['id']; ?>)">Beli</a>
                <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

  <script>
    function confirmBeli(id) {
      swal({
          title: "Ingin membeli jam ini?",
          buttons: true,
        })
        .then((confirm) => {
          if (confirm) {
            swal("Pembelian berhasil!", {
              icon: "success",
              buttons: false
            });
            setTimeout(function() {
              document.location = 'beli/' + id;
            }, 1500)
          }
        });
    }
  </script>
  <?php include_once("bottom.php") ?>