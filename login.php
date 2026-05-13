<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="ubah.css">

</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark position-relative py-3"
     style="background-color: #6a500a;">

    <div class="container-fluid">

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
             id="navbarNavDropdown">

            <ul class="navbar-nav">

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">

                        Outlets

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <span class="dropdown-item-text">
                                Svarga Menteng
                            </span>
                        </li>

                        <li>
                            <span class="dropdown-item-text">
                                Svarga Bali
                            </span>
                        </li>

                        <li>
                            <span class="dropdown-item-text">
                                Svarga Surabaya
                            </span>
                        </li>

                        <li>
                            <span class="dropdown-item-text">
                                Svarga Jogja
                            </span>
                        </li>

                    </ul>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="promo.html">
                        Promotions
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="event.html">
                        Events
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.html">
                        About
                    </a>
                </li>

            </ul>

            <div class="position-absolute start-50 translate-middle-x">

                <img src="photo/logo.png"
                     alt="Logo"
                     width="80">

            </div>

            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">

                    <a class="nav-link"
                       href="menu.php">

                        Lihat Menu

                    </a>

                </li>

                <li class="nav-item ms-2">

                    <a class="btn btn-outline-light"
                       href="reservasi.php">

                        Reservasi

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>

<div class="container mt-5">

    <div class="cardd p-4 mx-auto"
         style="max-width:400px;">

        <h3 class="text-center mb-4">
            Login
        </h3>

        <?php if(isset($_SESSION['error'])): ?>

            <div class="alert alert-warning">

                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>

            </div>

        <?php endif; ?>

        <?php if(isset($_SESSION['login_error'])): ?>

            <div class="alert alert-danger">

                <?php
                echo $_SESSION['login_error'];
                unset($_SESSION['login_error']);
                ?>

            </div>

        <?php endif; ?>

        <form action="otwLogin.php"
              method="POST">

            <div class="mb-3">

                <label>
                    Username
                </label>

                <input type="text"
                       name="username"
                       class="form-control"
                       required>

            </div>

            <div class="mb-4">

                <label>
                    Password
                </label>

                <input type="password"
                       name="password"
                       class="form-control"
                       required>

            </div>

            <button class="btn btn-success w-100">

                Login

            </button>

        </form>

        <p class="text-center mt-3">

            Belum punya akun?

            <a href="daftar.php">
                Daftar
            </a>

        </p>

    </div>

</div>

<footer class="footer">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <h3 class="merk">
                    Svarga
                </h3>

                <p>
                    Svarga adalah restoran yang menyajikan
                    cita rasa tradisional Indonesia dengan
                    sentuhan modern.
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

        <p>
            © 2026 PT Svarga. All rights reserved.
        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>