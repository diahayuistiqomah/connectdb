<?php


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'arkatama_stores');

function db_connect() {

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // Cek koneksi
  if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
  }

  return $conn;
}



?>
``