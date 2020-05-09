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



<script type="text/javascript" src="https://code.jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<title>Login</title>

<div class="row">
  <form action="" method="POST" class="col s12 m8 offset-m4">
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">Username atau Password salah</p>
    <?php endif; ?>
    <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-action blue-grey darken-1">
            <h3>Login Form</h3>
          </div>
          <div class="card-content white-text">
            <div class="row">
              <div class="input-field">
                <label for="username">Username</label>
                <input type="text" name="username" class="validate">
              </div>
            </div>
            <div class="row">
              <div class="input-field">
                <input name="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <p>
              <label>
                <input type="checkbox" name="remember">
                <span>Remember me</span>
              </label>
            </p>
            <br>
            <button type="submit" name="submit" class="btn  waves-effect waves-dark" style="width: 100%;">Login</button>
            <br>
            <br>
            <div class="registrasi">
              <p style="color: black;">Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
            </div>
          </div>
  </form>
</div>