<?php

$host = "localhost";
$user = "root";
$pass = "";
$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal");

$name = "mywatch";

mysqli_select_db($koneksi, $name);

$BASE_PATH = "/mywatch/";
