<?php
// mengecek apakah ada id yang dikirimkan 
// jika tidak makan akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$p = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <style>
        .container {
            border: 3px solid black;
            background-color: pink;
            width: 500px;
            height: 300px;
            margin: 100px 0 0 350px;
            padding: 20px;
            text-align: center;
            font-family: courier;
            font-size: medium;
        }

        img {
            border: 2px solid black;
            width: 300px;
            height: 300px;
            float: left;
        }

        button:link,
        a:link {
            color: #0000CD;
        }

        button:hover,
        a:hover {
            text-decoration: none;
            color: #48D1CC;
            /* medium turquoise */
        }

        button:active,
        a:active {
            text-decoration: none;
        }
    </style>
</head>

<body bgcolor="#1a237e">
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $p["foto"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $p["nama"]; ?></p>
            <p><?= $p["ukuran"]; ?></p>
            <p><?= $p["warna"]; ?></p>
            <p><?= $p["stok"]; ?></p>
            <p><?= $p["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a>
    </div>
</body>

</html>