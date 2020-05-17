<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal');
         </script>";
  }
}
?>

<script type="text/javascript" src="https://code.jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<title>Registrasi</title>

<div class="row">
  <form action="" method="POST" class="col s12 m8 offset-m4">
    <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-action center-align indigo darken-3 white-text">
            <h3>Form Registrasi</h3>
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
            <button type="submit" name="register" class="btn   indigo darken-3 white-text" style="width: 100%;">Register</button>
          </div>
  </form>
</div>