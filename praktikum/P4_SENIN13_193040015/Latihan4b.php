<?php 
    $bolaterkenal = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemain Bola</title>
</head>
<body>
    <h4>Daftar Pemain Bola Terkenal</h4>
    <ol>
        <?php foreach ($bolaterkenal as $nama):?>
            <li><?= $nama ?></li>
        <?php endforeach; ?>
    </ol>
    <br>
    <?php
        $bolaterkenal[]="Luca Modric";
        $bolaterkenal[]="Sadio Mane";
        sort($bolaterkenal)
    ?> 

    <h4>Daftar Pemain Bola Terbaru</h4>
    <ol>
        <?php foreach ($bolaterkenal as $nama): ?>
            <li><?php echo $nama; ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>