<?php 
    $bolaterkenal = [
        "Cristiano Ronaldo" => "Juventus",
        "Lionel Messi" => "Barcelona",
        "Luca Modric" => "Real Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar Jr" => "Paris Saint Germain",
        "Sadio Mane" => "Liverpool",
        "Ziatan Ibrahimovic" => "Ac Milan",
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
    <style>
        tabel{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h4>Daftar Pemain Bola dan Clubnya</h4>
    <table>
        <?php foreach ($bolaterkenal as $nama => $club) : ?>
            <tr>
                <td><b><?= "$nama"; ?></td>
                <td>:</td>
                <td><?= "$club" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>