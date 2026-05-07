<?php
session_start();
include 'koneksi.php';

$nama = $_POST['first_name']." ".$_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_pw'];

// validasi password
if ($password != $confirm) {
    $_SESSION['error'] = "Password tidak sama";
    header("Location: daftar.php");
    exit();
}

// cek email
$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
if (mysqli_num_rows($cek) > 0) {
    $_SESSION['error'] = "Email sudah terdaftar";
    header("Location: login.php");
    exit();
}

// simpan ke database
$query = mysqli_query($koneksi,
"INSERT INTO users (username, email, password, role) 
VALUES ('$nama', '$email', '$password', 'user')"
) or die(mysqli_error($koneksi));

if ($query) {

    // ambil ID terakhir
    $id_user = mysqli_insert_id($koneksi);

    // AUTO LOGIN
    $_SESSION['user_id'] = $id_user;
    $_SESSION['user_name'] = $nama;
    $_SESSION['user_role'] = 'user';
    $_SESSION['logged_in'] = true;
    $_SESSION['is_admin'] = false;

    // langsung ke booking
    header("Location: booking.php");
    exit();

} else {
    $_SESSION['error'] = "Registrasi gagal";
    header("Location: daftar.php");
    exit();
}
?>