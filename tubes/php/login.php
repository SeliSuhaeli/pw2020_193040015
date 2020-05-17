<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// melakukan pengecekkan apakah user sudah melakukan login jiga sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $eror = true;
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
  <title>Login</title>

</head>

<body bgcolor="#1a237e">
  <div class="row">
    <form action="" method="POST" class="col s12 m8 offset-m4">
      <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau Password salah</p>
      <?php endif; ?>
      <div class="row login">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-action center-align indigo darken-3 white-text">
              <h3>Login Form</h3>
            </div>
            <div class="card-content  white-text">
              <div class="form-field">
                <label for="username">Username</label>
                <input type="text" name="username" class="validate">
              </div>

              <div class="form-field">
                <label for="password">Password</label>
                <input name="password" type="password" class="validate">
              </div>

              <label>
                <input type="checkbox" name="remember">
                <span for="password">Remember me</span>
              </label>
              <br><br>

              <button type="submit" name="submit" class="btn   indigo darken-3 white-text" style="width: 100%;">Login</button>
              <br>
              <br>
              <div class="registrasi">
                <p style="color: black;">Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
              </div>
            </div>
    </form>
  </div>
</body>

</html>