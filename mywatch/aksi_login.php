<?php

session_start();
include_once('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($koneksi, "SELECT * FROM user where username = '$username' AND password = '$password'");
$cek  = mysqli_num_rows($query);

if ($cek) {
  $_SESSION['username'] = $username;
  header("location: admin");
} else {
  $_SESSION['validMsg'] = 'Username atau password Anda salah!';
  header("location: login");
}
