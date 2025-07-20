<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>

<body>
    <h1>Kalkulator</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Angka Pertama: <input type="text" name="angka1" id=""><br>
        Angka Kedua: <input type="text" name="angka2" id="">
        <br>
        Operasi:
        <select name="operator" id="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">:</option>
        </select>
        <br>
        <input type="submit" value="Hitung">
    </form>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case 'tambah':
            $hasil = $angka1 + $angka2;
            break;
        case 'kurang':
            $hasil = $angka1 - $angka2;
            break;
        case 'kali':
            $hasil = $angka1 * $angka2;
            break;
        case 'bagi':
            $hasil = $angka1 / $angka2;
            break;
        default:
        $hasil = "Operator tidak valid";
    }
    echo "Hasil = $hasil";
}
?>

</html>