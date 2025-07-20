<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Hitung Luas Segitiga</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
        Alas: <input type="text" name="alas" id="alas"> <br>
        Tinggi: <input type="text" name="tinggi" id="tinggi"> <br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $luas = 0.5 * $alas * $tinggi;
        echo "Luas adalah: $luas";
    }
    ?>
</body>

</html>