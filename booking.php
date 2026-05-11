<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Reservasi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="ubah.css">
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
                        <a class="nav-link active" href="event.html">Events</a>
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
                        <a class="nav-link" href="menu.html">Lihat Menu</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="reservasi.html" class="btn btn-outline-light">Reservasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="booking-wrapper">
    <div class="booking-card">
        <h2 class="booking-title" style="text-align: center;">Form Reservasi</h2>
        <form action="otwBooking.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Jumlah Orang</label>
                <input type="number" name="jumlah_orang" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control"required>
            </div>
            <div class="mb-4">
                <label class="form-label">Jam</label>
                <select name="jam" class="form-select" required>
                    <option value="">-- Pilih Jam --</option>
                    <option>12:00</option>
                    <option>12:15</option>
                    <option>12:30</option>
                    <option>12:45</option>
                    <option>13:00</option>
                    <option>13:15</option>
                    <option>13:30</option>
                    <option>13:45</option>
                    <option>14:00</option>
                    <option>14:15</option>
                    <option>14:30</option>
                    <option>14:45</option>
                    <option>15:00</option>
                    <option>15:15</option>
                    <option>15:30</option>
                </select>
            </div>
            <button type="submit" class="btn btn-dark w-100">Reservasi
            </button>
        </form>
    </div>
</div>
</body>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="merk">Svarga</h3>
                <p> Svarga adalah restoran yang menyajikan cita rasa tradisional Indonesia dengan sentuhan modern, menawarkan pengalaman kuliner yang hangat dan autentik.</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</footer>
</html>