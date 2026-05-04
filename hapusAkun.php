<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM users WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
if($result){
    echo "Akun berhasil dihapus!";
    header('location: dashboardAdmin.php');
    exit();
}
else{
    echo "Gagal menghapus akun: " . mysqli_error($koneksi);
}
