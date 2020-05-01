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
    </style>
</head>
<body>
    <div class="container">
        <?php foreach ($pakaian as $p) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $p['id'] ?>">
                    <?= $p["nama"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>