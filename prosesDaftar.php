<?php
session_start();
include 'koneksi.php';

$nama = $_POST['first_name']." ".$_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_pw'];

// VALIDASI
if ($password != $confirm) {
    $_SESSION['error'] = "Password tidak sama";
    header("Location: daftar.php");
    exit();
}

// simpan ke database
$query = mysqli_query($koneksi,
"INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')"
);

if ($query) {
    header("Location: dashboardAdmin.php");
    exit();
} else {
    $_SESSION['error'] = "Registrasi gagal";
    header("Location: daftar.php");
    exit();
}
?>