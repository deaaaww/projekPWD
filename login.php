<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){
  $nama = $_POST['nama'];
  $password = $_POST['password'];

  $cek = mysqli_query($koneksi, "SELECT * FROM identitas WHERE nama='$nama' AND password='$password'");

  if(mysqli_num_rows($cek) > 0){
    $_SESSION['login'] = true;
    $_SESSION['nama'] = $nama;

    header("Location: design.php");
    exit();
  } else {
    echo "<script>
      alert('Akun tidak ditemukan! Silakan daftar dulu.');
      window.location='register.php';
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ubah.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center">Create Account </h1>
        <div class="form-box">
            <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="lalalula">
            </div>
            <div class="mb-3">
            <label class="form-label">email</label>
            <input type="text" class="form-control" placeholder="@lalalula@gmail.com">
            </div>
            <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Masukkan password">
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-secondary submit">Login</button>
        </div>
        <p class="text-center mt-3">Already a member? <a href="register.php">Register here</a></p>
        

</div>
</body>
</html>