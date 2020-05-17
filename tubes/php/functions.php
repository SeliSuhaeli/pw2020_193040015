<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040015") or die("Dtabase salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function upload()
{
    $nama_file = $_FILES['foto']['name'];
    $tipe_file = $_FILES['foto']['type'];
    $ukuran_file = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        echo "<script>
            alert('pilih gambar terlebih dahulu!');
          </script>";

        return 'nophoto.png';
    }

    //cek ekstensi file
    $daftar_foto = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_foto)) {
        echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
            alert('ukuran terlalu besar!');
          </script>";
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

    return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();

    // $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $warna = htmlspecialchars($data['warna']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);


    // upload gambar
    $foto = upload();
    if (!$foto) {
        return false;
    }

    $query = "INSERT INTO
              pakaian
            VALUES
            (null, '$foto', '$nama', '$ukuran', '$warna', '$stok', '$harga')";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $foto_lama = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $warna = htmlspecialchars($data['warna']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);

    $foto = upload();
    if (!$foto) {
        return false;
    }

    if ($foto == 'nophoto.png') {
        $foto = $foto_lama;
    }


    $query = "UPDATE pakaian SET
                foto = '$foto',
                nama = '$nama',
                ukuran = '$ukuran',
                warna = '$warna',
                stok = '$stok',
                harga = '$harga'
                WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
              </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru 
    $query_tambah = "INSERT INTO user VALUES(null, '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
