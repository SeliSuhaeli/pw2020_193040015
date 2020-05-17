<?php 
    $pakaian = [
        [
            "foto" => "minidress.jpeg",
            "nama" => "Mini Dress",
            "ukuran" => "All Size",
            "warna" => "Dusty Pink, Navy, Lightblue",
            "stok" => 321,
            "harga" => 250000
        ],
        [
            "foto" => "celana.jpeg",
            "nama" => "Celana Boyfriend Wanita",
            "ukuran" => "M, L, XL",
            "warna" => "Navy, Black, Lightblue",
            "stok" => 441,
            "harga" => 130000
        ],
        [
            "foto" => "kemeja retro.jpg",
            "nama" => "Kemeja Retro Vintage",
            "ukuran" => "All Size",
            "warna" => "White, Black",
            "stok" => 150,
            "harga" => 95000
        ],
        [
            "foto" => "jumpsuit.jpeg",
            "nama" => "Jumpsuit",
            "ukuran" => "All Size",
            "warna" => "Moca, Coklat-susu, Milo, Grey",
            "stok" => 200,
            "harga" => 120000
        ],
        [
            "foto" => "overall.jpg",
            "nama" => "Overall Rok ",
            "ukuran" => "All Size",
            "warna" => "Navy, Baby-blue, Moca",
            "stok" => 554,
            "harga" => 100000
        ],
        [
            "foto" => "piyama.jpeg",
            "nama" => "Piyama",
            "ukuran" => "M, L",
            "warna" => "Yellow, Pink, Blue",
            "stok" => 250,
            "harga" => 80000
        ],
        [
            "foto" => "roktutu.jpg",
            "nama" => "Rok Tutu",
            "ukuran" => "All Size",
            "warna" => "Pink, Black, Cream, Grey",
            "stok" => 542,
            "harga" => 75000
        ],
        [
            "foto" => "rok.jpg",
            "nama" => "Korean Mini Skirt",
            "ukuran" => "All Size",
            "warna" => "Lightblue, Pink",
            "stok" => 200,
            "harga" => 150000
        ],
        [
            "foto" => "set.jpg",
            "nama" => "Sporty Set",
            "ukuran" => "All Size fit to XL",
            "warna" => "Milo, Dark-blue, Dark-grey, Pink",
            "stok" => 250,
            "harga" => 160000
        ],
        [
            "foto" => "hoodie.jpeg",
            "nama" => "Hoodie",
            "ukuran" => "All Size fit to XL",
            "warna" => "Black, White",
            "stok" => 350,
            "harga" => 250000
        ],
        [
            "foto" => "kaos.jpeg",
            "nama" => "T-shirt",
            "ukuran" => "Oversize",
            "warna" => "Blue, White, Pink",
            "stok" => 432,
            "harga" => 90000
        ]
        ];
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
            <td align= "center"><img src="img/<?=$p ["foto"]; ?>"></td>
            <td align= "center"><?=$p ["nama"]; ?></td>
            <td align= "center"><?=$p ["ukuran"]; ?></td>
            <td align= "center"><?=$p ["warna"]; ?></td>
            <td align= "center"><?=$p ["stok"]; ?></td>
            <td align= "center"><?=$p ["harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>