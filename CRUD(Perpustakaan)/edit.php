<?php
include 'koneksi.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $isbn = $_POST['isbn'];
    
    $query = "UPDATE buku SET 
              judul='$judul', 
              pengarang='$pengarang', 
              tahun_terbit='$tahun_terbit', 
              isbn='$isbn' 
              WHERE id=$id";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

$query = "SELECT * FROM buku WHERE id=$id";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>

<body>
    <h1>Edit Buku</h1>
    <form method="POST">
        <label>Judul:</label>
        <input type="text" name="judul" value="<?php echo $row['judul']; ?>" required><br>

        <label>Pengarang:</label>
        <input type="text" name="pengarang" value="<?php echo $row['pengarang']; ?>" required><br>

        <label>Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>" required><br>

        <label>ISBN:</label>
        <input type="text" name="isbn" value="<?php echo $row['isbn']; ?>" required><br>

        <button type="submit">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>