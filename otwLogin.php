<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, 
"SELECT * FROM users WHERE username='$username' AND password='$password'"
);

$user = mysqli_fetch_assoc($query);

if ($user) {

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['username'];
    $_SESSION['user_role'] = $user['role'];
    $_SESSION['logged_in'] = true;

    if ($user['role'] == 'admin') {
        $_SESSION['is_admin'] = true;
        header("Location: dashboardAdmin.php");
    } else {
        $_SESSION['is_admin'] = false;
        header("Location: booking.php");
    }
    exit();

} else {
    $_SESSION['login_error'] = "Username atau password salah";
    header("Location: login.php");
    exit();
}
?>