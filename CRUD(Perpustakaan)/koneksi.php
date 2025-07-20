<?php
$host = "localhost";
$username = "root";
$password = "P@ssword_123";
$database = "perpustakaan1";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>