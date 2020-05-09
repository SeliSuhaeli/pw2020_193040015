<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query dengan parameter id yang diambil dari url
$p = query("SELECT * FROM pakaian");


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
    <title>Latihan 7a</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body id="home" class="scrollspy">
    <div class="navbar-fixed">
        <nav class="background">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Butique</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <i class="large material-icons">search</i>
                    </li>
                    <li>
                        <form action="" method="GET">
                            <input type="text" name="keyword" size="20" placeholder="Cari" autocomplate="off" autofocus>
                            <input type="hidden" name="cari">
                        </form>
                    </li>
                    <li>
                        <a href="php/login.php">
                            <i class="large material-icons" title="Masuk ke halaman admin">account_circle</i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li>
            <form action="" method="GET">
                <input type="text" name="keyword" size="10" placeholder="Cari" autocomplate="off" autofocus>
                <input type="hidden" name="cari">
            </form>
        <li>
            <a href="php/login.php"><i class="small material-icons" title="masuk ke halaman admin">account_circle</i></a>
        </li>
    </ul>
    <?php if (empty($pakaian)) : ?>
        <tr>
            <td colspan="2">
                <h1>DATA TIDAK DITEMUKAN</h1>
            </td>
        </tr>
    <?php else : ?>
        <?php foreach ($pakaian as $p) : ?>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="assets/img/<?= $p["foto"]; ?>" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content">
                            <p class="nama">
                                <a href="php/detail.php?id=<?= $p['id']; ?>">
                                    <?= $p['nama']; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif ?>
    </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);
    </script>
</body>

</html>