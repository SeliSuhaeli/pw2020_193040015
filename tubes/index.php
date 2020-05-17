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
harga Like '%$keyword%'");
} else {
    $pakaian = query("SELECT * FROM pakaian");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butique</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
        nav.background {
            background: linear-gradient(45deg, black, navy, black);
        }

        p {
            color: red,
        }

        .login button {
            border-radius: 20px;
        }

        img {
            width: 100px;
            height: 100px;
        }

        .testimonial {
            margin-top: 130px;
        }

        .testimonial p {
            font-size: 1.4em;
            text-align: center;
            font-weight: 200;
            font-style: italic;
            margin-bottom: 30px;
        }

        .testimonial img {
            width: 80px;
            height: 80px;
            margin: 10px;
            border-radius: 50%;
            filter: grayscale(1);
        }

        .testimonial .img-main {
            width: 100px;
            height: 100px;
            margin-top: -5px;
            filter: grayscale(0);
        }

        .testimonial .info-text h5 {
            font-size: 16px;
            font-weight: bold;
        }

        .testimonial .info-text p {
            font-size: 12px;
            margin-top: -5px;
            color: #acacac;
            font-style: normal;
        }
    </style>

</head>

<body bgcolor="#1a237e" id="home" class="scrollspy">
    <div class="navbar-fixed">
        <nav class="background">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Butique</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#produk">Produk</a></li>
                        <li>
                            <i class="large material-icons">search</i>
                        </li>
                        <li>
                            <form action="" method="GET">
                                <input type="text" name="keyword" size="20" placeholder="Cari" autocomplate="off" autofocus style="color: white;">
                                <input type="hidden" name="cari">
                            </form>
                        </li>
                        <li>
                            <div class="login">
                                <button type="submit" name="submit" class="btn  waves-effect waves-dark"><a href="php/login.php">LOGIN</a></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li>
            <div class="login">
                <button type="submit" name="submit" class="btn  waves-effect waves-dark"><a href="php/login.php" style="color: white;">LOGIN</a></button>
            </div>
        </li>
        <li>
            <form action="" method="GET">
                <input type="text" name="keyword" size="10" placeholder="Cari" autocomplate="off" autofocus>
                <input type="hidden" name="cari">
            </form>
        </li>
        <li>
            <a href="#home">Home</a>
            <a href="#produk">Produk</a>
        </li>
    </ul>

    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="assets/img/3.jpg">
                <div class="caption center-align">
                    <h3 style="color: whitesmoke;">Welcome to My Website:)</h3>
                </div>
            </li>
            <li>
                <img src="assets/img/2.jpg">
                <div class="caption left-align"></div>
            </li>
            <li>
                <img src="assets/img/1.jpg">
                <div class="caption right-align"></div>
            </li>
        </ul>
    </div>

    <!--produk-->
    <h3 class="center white-text text-lighten3" id="produk">Produk</h3>
    <?php if (empty($pakaian)) : ?>
        <tr>
            <td colspan="2">
                <h1>DATA TIDAK DITEMUKAN</h1>
            </td>
        </tr>
    <?php else : ?>
        <?php foreach ($pakaian as $p) : ?>
            <div class="container">
                <ul class="collection">
                    <li class="collection-item avatar">
                        <img src="assets/img/<?= $p["foto"]; ?>" alt="" class="circle">
                        <span class="title"></span>
                        <p class="nama">
                            <a href="php/detail.php?id=<?= $p['id']; ?>">
                                <?= $p['nama']; ?>
                            </a>
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                </ul>
            </div>
        <?php endforeach; ?>
    <?php endif ?>


    <!-- testimonial -->
    <section class="testimonial">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p>"Bekerja Keraslah Agar Kamu Tidak Perlu Melihat Label Harga Saat Berbelanja:)"</p>
            </div>
        </div>
        <div class="row justify-content-center center-align">
            <div class="col-lg-6 justify-content-center">
                <img src="assets/img/2.jpg" alt="Testimonial 1">
                <img src="assets/img/3.jpg" alt="Testimonial 2" class="img-main">
                <img src="assets/img/4.jpg" alt="Testimonial 3">
            </div>
        </div>
        </div>
    </section>

    <!--footer-->
    <footer style="padding: 5px; height: 30px; color: white; text-align: center;">
        <p class="flow-text black">&copy; <?php echo date("Y"); ?> Butique</p>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            width: 300
        });
    </script>
</body>

</html>