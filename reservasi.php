<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $jumlah = $_POST['jumlah'];

    echo "<script>alert('Reservasi berhasil untuk $nama');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ubah.css">
</head>
<body>
    <div class="hero-image">
        <div class="hero-text">
            <button class="btn btn-warning me-2">Reservasi</button> <br><br>
            <button class="btn btn-outline-warning">Promo Terkini</button>
        </div>
    </div>
</body>
</html>