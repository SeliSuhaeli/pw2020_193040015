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

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
    nav.background {
      background: linear-gradient(45deg, black, navy, black);
    }

    .container1 {
      border: 1px solid navy;
      box-shadow: 6px 6px 6px 6px rgba(0, 0, 0, 1);
      background-color: #1a237e;
      width: auto;
      height: auto;
      margin: 50px 200px 50px 200px;
      padding: 20px;
      text-align: center;
      font-family: courier;
      font-size: medium;
    }

    .logout button {
      border-radius: 20px;
    }

    .tombol {
      border-radius: 20px
    }

    .tekan {
      border-radius: 20px;
      float: right;
    }

    form {
      float: left;
    }

    img {
      float: left;
    }

    p {
      color: white;
    }
  </style>

</head>

<body bgcolor="#1a237e">
  <div class="navbar-fixed">
    <nav class="background">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Butique</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li>
              <div class="logout">
                <button type="submit" name="submit" class="btn  waves-effect waves-dark"><a href="logout.php">LOGOUT</a></button>
              </div>
            </li>
          </ul>
        </div>
    </nav>
  </div>
  </div>
  <div class="container1">
    <a href="tambah.php"><button class="tekan btn  waves-effect waves-dark">Tambah Data Pakaian</button></a>
    <form action="" method="GET">
      <input type="text" name="keyword" placeholder="cari.." autocomplate="off" autofocus>
      <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>
    <br><br>
    <table border="1" cellpadding="13" cellspacing="0" style="color: white;">
      <?php if (empty($pakaian)) : ?>
        <p colspan="8">
          <h1>Data tidak ditemukan</h1>
        </p>
      <?php else : ?>

        <?php foreach ($pakaian as $p) : ?>
          <br>
          <div class="row">
            <div class="col m4 s12">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img src="../assets/img/<?= $p['foto']; ?>" width="100">
                </div>
                <div class="card-content center-align indigo darken-3 white-text">
                  <p>
                    <a href="ubah.php?id=<?= $p['id']; ?>"><button class="tombol btn  waves-effect waves-dark">Ubah</button></a>
                    <a href="hapus.php?id=<?= $p['id']; ?>" onclick="return confirm('Hapus Data??')"><button class="tombol btn  waves-effect waves-dark">Hapus</button></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col m6 s12">
              <div class="card indigo darken-3">
                <div class="card-content white-text">
                  <span class="card-title"><?= $p['nama']; ?></span>
                  <p>Ukuran :<?= $p['ukuran']; ?></p>
                  <p>Warna :<?= $p['warna']; ?></p>
                  <p>Stok :<?= $p['stok']; ?></p>
                  <p>Harga :<?= $p['harga']; ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </div>
  <script src="../js/script.js"></script>
</body>

</html>