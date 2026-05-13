<?php
session_start();
include 'koneksi.php';

if($_SESSION['user_role'] != 'admin'){
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];


$ambil = mysqli_query(
    $koneksi,
    "SELECT * FROM menu WHERE id_menu='$id'"
);

$data = mysqli_fetch_assoc($ambil);


if($data['foto']){
    unlink($data['foto']);
}


$hapus = mysqli_query(
    $koneksi,
    "DELETE FROM menu WHERE id_menu='$id'"
);

if($hapus){

    header("Location: dashboardAdmin.php");
    exit();

} else {

    echo "Gagal hapus menu";

}
?>