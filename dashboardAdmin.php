<?php
session_start();
include 'koneksi.php';

if($_SESSION['user_role'] != 'admin'){
    header("Location: login.php");
    exit();
}

$menu = mysqli_query($koneksi, "SELECT * FROM menu");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark position-relative py-3" style="background-color: #6a500a;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Outlets
                        </a>
                        <ul class="dropdown-menu">
                            <li><span class="dropdown-item-text">Svarga Menteng</span></li>
                            <li><span class="dropdown-item-text">Svarga Bali</span></li>
                            <li><span class="dropdown-item-text">Svarga Surabaya</span></li>
                            <li><span class="dropdown-item-text">Svarga Jogja</span></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="promo.html">Promotions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.html">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.html">About</a>
                    </li>
                </ul>
                <div class="position-absolute start-50 translate-middle-x">
                    <img src="photo/logo.png" alt="Logo" width="80">
                </div>
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Lihat Menu</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="reservasi.html" class="btn btn-outline-light">Reservasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container mt-5">

    <div class="d-flex justify-content-between mb-4">

        <h2>Data Menu</h2>

        <a href="tambahMenu.php" class="btn btn-dark">
            + Tambah Menu
        </a>

    </div>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php 
        $no = 1;

        while($data = mysqli_fetch_assoc($menu)){
        ?>

        <tr>

            <td><?= $no++; ?></td>

            <td>
                <img src="<?= $data['foto']; ?>" width="100">
            </td>

            <td><?= $data['nama_menu']; ?></td>

            <td>
                Rp<?= number_format($data['harga'],0,',','.'); ?>
            </td>

            <td>

                <a href="editMenu.php?id=<?= $data['id_menu']; ?>" 
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="hapusMenu.php?id=<?= $data['id_menu']; ?>" 
                   class="btn btn-danger btn-sm">
                    Hapus
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>