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

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $warna = htmlspecialchars($data['warna']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO pakaian
                    VALUES
                        (null, '$foto', '$nama', '$ukuran', '$warna', '$stok', '$harga')";
    mysqli_query($conn, $query);

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
    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $warna = htmlspecialchars($data['warna']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);

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
