<?php
session_start();
include 'koneksi.php';

$nama = $_POST['first_name']." ".$_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_pw'];


if ($password != $confirm) {
    $_SESSION['error'] = "Password tidak sama";
    header("Location: daftar.php");
    exit();
}


$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
if (mysqli_num_rows($cek) > 0) {
    $_SESSION['error'] = "Email sudah terdaftar";
    header("Location: login.php");
    exit();
}


$query = mysqli_query($koneksi,
"INSERT INTO users (username, email, password, role) 
VALUES ('$nama', '$email', '$password', 'user')"
) or die(mysqli_error($koneksi));

if ($query) {

   
    $id_user = mysqli_insert_id($koneksi);

  
    $_SESSION['user_id'] = $id_user;
    $_SESSION['user_name'] = $nama;
    $_SESSION['user_role'] = 'user';
    $_SESSION['logged_in'] = true;
    $_SESSION['is_admin'] = false;

    header("Location: booking.php");
    exit();

} else {
    $_SESSION['error'] = "Registrasi gagal";
    header("Location: daftar.php");
    exit();
}
?>