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
    <title>Latihan 5c</title>
    <style>
            .container {
                border : 3px solid black; 
                background-color: pink; 
                width: 400px;
                height : 400px;
                margin : auto;
                padding : 20px 0 20px 0;
                text-align: center;
                font-family: courier;
                font-size: medium;
            }
            img {
                border : 2px solid black;
                width : 150px;
                height : 150px;
            }
            button:link, a:link {
                color : #0000CD;
            }
            button:hover, a:hover {
                text-decoration: none;
                color : #48D1CC; /* medium turquoise */
            }
            button:active, a:active {
                text-decoration: none;
            }
    </style>
</head>
<body>
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