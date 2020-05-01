<?php
require 'functions.php';

$pakaian = query("SELECT * FROM pakaian")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 6a</title>
  <style>
    table {
      background: linear-gradient(#008000, #ADFF2F);
    }

    img {
      width: 100px;
      height: 100px;
      border: 2px solid #808080;
    }

    button {
      background: #00FF00;
      color: black;
      font-family: sans-serif;
      font-size: 11pt;
    }
  </style>
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Opsi</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Ukuran</th>
      <th>Warna</th>
      <th>Stok</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($pakaian as $p) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $p['foto']; ?>" width="100"></td>
        <td><?= $p['nama']; ?></td>
        <td><?= $p['ukuran']; ?></td>
        <td><?= $p['warna']; ?></td>
        <td><?= $p['stok']; ?></td>
        <td><?= $p['harga']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>