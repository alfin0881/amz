<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Buku</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    </style>
</head>

<body>
    <h1>Daftar Buku</h1>
    <a href="tambah.php">Tambah Buku Baru</a>
    <br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>ISBN</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = "SELECT * FROM buku ORDER BY id DESC";
        $result = mysqli_query($koneksi, $query);
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['judul'] . "</td>";
            echo "<td>" . $row['pengarang'] . "</td>";
            echo "<td>" . $row['tahun_terbit'] . "</td>";
            echo "<td>" . $row['isbn'] . "</td>";
            echo "<td>
                    <a href='edit.php?id=" . $row['id'] . "'>Edit</a> | 
                    <a href='hapus.php?id=" . $row['id'] . "' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>