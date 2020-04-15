<?php 
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // melakukan query
    $pakaian = query("SELECT * FROM pakaian")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas193040015</title>
    <style>
        table {
            border: 1px solid black;
            width: 90%;
        }
        td, h2 {
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        img {
            height: 250px;
        }
    </style>
</head>
<body>
    <h1>Butique</h1>
    <table border= "1" cellpadding= "3" cellspaceing= "0">
        <tr>
            <td align= "center"><b>No.</b></td>
            <td align= "center"><b>Foto</b></td>
            <td align= "center"><b>Nama</b></td>
            <td align= "center"><b>Ukuran</b></td>
            <td align= "center"><b>Warna</b></td>
            <td align= "center"><b>Stok</b></td>
            <td align= "center"><b>Harga (Rp.)</b></td>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($pakaian as $p) : ?>
        <tr>
            <td align= "center"><?=$i; ?></td>
            <td align= "center"><img src="assets/img/<?= $p["foto"]; ?>"></td>
            <td align= "center"><?=$p ["nama"]; ?></td>
            <td align= "center"><?=$p ["ukuran"]; ?></td>
            <td align= "center"><?=$p ["warna"]; ?></td>
            <td align= "center"><?=$p ["stok"]; ?></td>
            <td align= "center"><?=$p ["harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>