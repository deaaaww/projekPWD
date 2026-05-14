<?php
include 'koneksi.php';

$menu = mysqli_query($koneksi, "SELECT * FROM menu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ubah.css">
    <style>

        .card-menu {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .card img{
            height: 300px;
            object-fit: cover;
        }

    </style>

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
                        <a class="nav-link" href="events.html">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                </ul>
                <div class="position-absolute start-50 translate-middle-x">
                    <img src="photo/logo.png" alt="Logo" width="80">
                </div>
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="menu.html">Lihat Menu</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-outline-light" href="reservasi.html">Reservasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<section style="background-color: #ede9df;">
    <div class="container text-center py-5">
        <h1 class="fw-bold">Our Menu</h1>
        <p class="text-muted" style="font-size: 20px;">Jelajahi berbagai hidangan lezat yang kami sajikan</p>
    </div>
    <section class="card-menu">

        <?php if(mysqli_num_rows($menu) > 0){ ?>
            <?php while($data = mysqli_fetch_assoc($menu)) { ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?= $data['foto']; ?>" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">
                            <?= $data['nama_menu']; ?> <br>
                            IDR <?= number_format($data['harga'],0,',','.'); ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <h3 class="text-center">Menu belum tersedia</h3>
        <?php } ?>
    </section>
</section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="merk">Svarga</h3>
                <p>
                    Svarga adalah restoran yang menyajikan cita rasa 
                    tradisional Indonesia dengan sentuhan modern, 
                    menawarkan pengalaman kuliner yang hangat dan autentik.
                </p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-4">
                        <h6>Summary</h6>
                        <ul class="list">
                            <li>About us</li>
                            <li>Outlets</li>
                            <li>Promotions</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h6>Support</h6>
                        <ul class="list">
                            <li>FAQ</li>
                            <li>Career</li>
                            <li>Contact Us</li>
                            <li>Membership</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h6>Social</h6>
                        <ul class="list">
                            <li>Instagram</li>
                            <li>Tiktok</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="bawah text-center">
        <p>© 2026 PT Svarga. All rights reserved.</p>
        <p>Terms of Service | Policy | Service Level Agreement</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>