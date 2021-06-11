<?php

session_start();
include_once("koneksi.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <title>MyWatch Store Indonesia - Toko Jam Tangan Original dengan Harga Terbaik!</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <main class="auth">
    <!-- Login -->
    <div class="auth-box">
      <div class="p-5">
        <h3 class="brand mb-5"><a href="<?= $BASE_PATH; ?>">MyWatch Store</a></h3>
        <h4 class="mb-4">Sign in to your account</h4>
        <form action="aksi_login.php" method="POST">
          <input type="text" class="form-control" placeholder="Username" id="username" name="username" />
          <input type="password" class="form-control" placeholder="Password" name="password" id="password" />

          <button id="loginBtn" class="btn btn-primary w-100 login-btn mb-2" type="submit">Sign In</button>

          <span id="validMsg" class="valid-msg my-1 d-block">
            <?php
            if (isset($_SESSION['validMsg'])) {
              echo $_SESSION['validMsg'];
              unset($_SESSION['validMsg']);
            }
            ?>
          </span>
          <a href="#" class="forgot">Forgot Password?</a>
          <a href="#" class="d-block">Don't have an account? Register here</a>

        </form>
      </div>
    </div>
    <!-- End Login -->
  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="js/auth.js"></script>
</body>

</html>