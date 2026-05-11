<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daftar</title>
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
            <li><a class="dropdown-item" href="#">Svarga Menteng</a></li>
            <li><a class="dropdown-item" href="#">Svarga Bali</a></li>
            <li><a class="dropdown-item" href="#">Svarga Surabaya</a></li>
            <li><a class="dropdown-item" href="#">Svarga Jogja</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="promo.html">Promotions</a>
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
          <a class="nav-link" href="menu.html">Lihat Menu</a>
        </li>
        <li class="nav-item ms-2">
          <a class="btn btn-outline-light" href="reservasi.html">Reservasi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="d-flex justify-content-center mt-4">
  <div class="cardd p-3" style="width:400px;">
    <div class="card-header">
      <h5>Registrasi Pengguna Baru</h5>
      <p class="text-muted">Buat akun untuk melakukan reservasi</p>
    </div>
    <div class="card-body">
      <form action="prosesdaftar.php" method="POST">
        <div class="mb-2">
          <input required placeholder="First Name" type="text" class="form-control" name="first_name">
        </div>
        <div class="mb-2">
          <input required placeholder="Last Name" type="text" class="form-control" name="last_name">
        </div>
        <div class="mb-2">
          <input required placeholder="Email" type="email" class="form-control" name="email">
        </div>
        <div class="mb-2">
          <input required placeholder="Password" type="password" class="form-control" name="password">
        </div>
        <div class="mb-2">
          <input required placeholder="Confirm Password" type="password"
          class="form-control <?php if(isset($_SESSION['error'])) echo 'is-invalid'; ?>"
          name="confirm_pw">
          <?php if(isset($_SESSION['error'])){ ?>
            <div class="text-danger mt-1">
              <?php 
                echo $_SESSION['error']; 
                unset($_SESSION['error']);
              ?>
            </div>
          <?php } ?>
        </div>
        <button type="submit" class="btn btn-success w-100">Daftar</button>
        <p class="text-center mt-2">
          Sudah punya akun? <a href="login.php">Masuk</a></p>
      </form>
    </div>
  </div>
</div>
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
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>