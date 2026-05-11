<?php
session_start();
include 'koneksi.php';


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$id_user = $_SESSION['user_id'];
$jumlah = $_POST['jumlah_orang'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];


if (empty($jumlah) || empty($tanggal) || empty($jam)) {
    echo "Data tidak boleh kosong";
    exit();
}

$query = "INSERT INTO reservasi (id_user, jumlah_orang, tanggal, jam)
          VALUES ('$id_user', '$jumlah', '$tanggal', '$jam')";

if (mysqli_query($koneksi, $query)) {
    header("Location: berhasil.php");
    exit();
} else {
    die(mysqli_error($koneksi));
}
?>