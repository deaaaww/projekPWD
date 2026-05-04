<?php
session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$nama' AND password='$password'";

$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['user_role'] = $user['role'];


    if ($user['role'] === 'admin') {
        $_SESSION['logged_in'] = true;
        $_SESSION['is_admin'] = true;
        echo "login berhasil";
        header('Location: dashboardAdmin.php');
        exit();
    } 
    
    else {
        $_SESSION['logged_in'] = true;
        $_SESSION['is_admin'] = false;
        echo "Login berhasil.";
        header('Location: index.php');
        exit();
    } 
    
} else {
    $_SESSION['login_error'] = "Email atau password salah. Silakan coba lagi.";
    header('Location: index.php');
    exit();
}

?>