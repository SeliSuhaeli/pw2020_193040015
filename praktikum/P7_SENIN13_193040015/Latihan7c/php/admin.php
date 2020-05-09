<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $pakaian = query("SELECT * FROM pakaian WHERE
                nama Like '%$keyword%' OR
                ukuran Like '%$keyword%' OR
                warna Like '%$keyword%' OR
                stok Like '%$keyword%' OR
                harga Like '%$keyword%' ");
} else {
  $pakaian = query("SELECT * FROM pakaian");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
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

    .tekan {
      text-decoration: none;
      color: #000000;
      background-color: #FFFF00;
      padding: 5px 10px;
      margin: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="logout">
      <a href="logout.php">Logout</a>
    </div>
    <a href="tambah.php"><button class="tekan">Tambah Data Pakaian</button></a>
    <form action="" method="GET">
      <input type="text" name="keyword" size="30" placeholder="Masukan keyword pencarian.." autocomplate="off" autofocus>
      <button type="submit" name="cari">Cari!</button>
      <br><br>
    </form>
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
      <?php if (empty($pakaian)) : ?>
        <tr>
          <td colspan="8">
            <h1>Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($pakaian as $p) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td>
              <a href="ubah.php?id=<?= $p['id']; ?>"><button class="tombol">Ubah</button></a>
              <a href="hapus.php?id=<?= $p['id']; ?>" onclick="return confirm('Hapus Data??')"><button class="tombol">Hapus</button></a>
            </td>
            <td><img src="../assets/img/<?= $p['foto']; ?>" width="100"></td>
            <td><?= $p['nama']; ?></td>
            <td><?= $p['ukuran']; ?></td>
            <td><?= $p['warna']; ?></td>
            <td><?= $p['stok']; ?></td>
            <td><?= $p['harga']; ?></td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </div>
</body>

</html>