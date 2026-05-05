<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM reservasi WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
if($result){
    echo "Reservasi berhasil dihapus!";
    header('location: dashboardAdmin.php');
    exit();
}
else{
    echo "Gagal menghapus reservasi: " . mysqli_error($koneksi);
}
