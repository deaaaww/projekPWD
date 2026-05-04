<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$query = "INSERT INTO users (username, email, password, role) VALUES ('$nama', '$email', '$password', '')";
$result = mysqli_query($koneksi, $query);
if($result){
    echo "Registrasi done!";
    header('location: index.php');
    exit();
}
else{
    echo "Registrasi gagal: " . mysqli_error($koneksi);
}