<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $isbn = $_POST['isbn'];
    
    $query = "INSERT INTO buku (judul, pengarang, tahun_terbit, isbn) 
              VALUES ('$judul', '$pengarang', '$tahun_terbit', '$isbn')";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>

<body>
    <h1>Tambah Buku Baru</h1>
    <form method="POST">
        <label>Judul:</label>
        <input type="text" name="judul" required><br>

        <label>Pengarang:</label>
        <input type="text" name="pengarang" required><br>

        <label>Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" required><br>

        <label>ISBN:</label>
        <input type="text" name="isbn" required><br>

        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>