<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM buku WHERE id=$id";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>