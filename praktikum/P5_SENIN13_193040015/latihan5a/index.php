<?php 
    // Melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

    // Memilih database
    mysqli_select_db($conn, "tubes_193040015") or die("Database salah!");

    // query mengambil objek dari tabel didalam database
    $result = mysqli_query($conn, "SELECT * FROM pakaian");
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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td align= "center"><?=$i; ?></td>
            <td align= "center"><img src="assets/img/<?= $row["foto"]; ?>"></td>
            <td align= "center"><?=$row ["nama"]; ?></td>
            <td align= "center"><?=$row ["ukuran"]; ?></td>
            <td align= "center"><?=$row ["warna"]; ?></td>
            <td align= "center"><?=$row ["stok"]; ?></td>
            <td align= "center"><?=$row ["harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile ?>
    </table>
</body>
</html>