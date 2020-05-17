<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil ditambahkan!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal ditambahkan!');
              document.location.href = 'admin.php';
          </script>";
  }
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

  <!--css-->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <title>Tambah Data</title>

</head>

<body bgcolor="#1a237e">
  <div class="row">
    <form action="" method="POST" class="col s12 m8 offset-m4" enctype="multipart/form-data">
      <div class="row tambah">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-action center-align indigo darken-3 white-text">
              <h3>Form Tambah Data</h3>
            </div>
            <div class="card-content  white-text">
              <div class="form-field">
                <label for="foto">Foto :</label>
                <br>
                <input type="file" id="foto" name="foto" class="foto" onchange="previewImage()" style="color:black" required>
                <img src="../assets/img/nophoto.png" width="120" class="img-preview">
              </div>

              <div class="form-field">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
              </div>

              <div class="form-field">
                <label for="ukuran">Ukuran :</label>
                <input type="text" name="ukuran" id="ukuran" required>
              </div>

              <div class="form-field">
                <label for="warna">Warna :</label>
                <input type="text" name="warna" id="warna" required>
              </div>

              <div class="form-field">
                <label for="stok">Stok :</label>
                <input type="text" name="stok" id="stok" required>

                <div class="form-field">
                  <label for="harga">Harga :</label>
                  <input type="text" name="harga" id="harga" required>
                </div>
                <button type="submit" name="tambah" class="btn   indigo darken-3 white-text" style="width: 100%;">Tambah Data</button>
                <br>
                <br>
                <button type="submit" class="btn   indigo darken-3">
                  <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
                </button>
                </ul>
              </div>
    </form>
  </div>

  <script src="../js/script.js"></script>
</body>

</html>