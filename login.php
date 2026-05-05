<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<div class="card p-4 mx-auto" style="max-width:400px;">

<h3 class="text-center">Login</h3>

<?php if(isset($_SESSION['login_error'])): ?>
<div class="alert alert-danger">
  <?= $_SESSION['login_error']; unset($_SESSION['login_error']); ?>
</div>
<?php endif; ?>

<form action="otwLogin.php" method="POST">

  <div class="mb-3">
    <label>Username</label>
    <input type="text" name="username" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required>
  </div>

  <button class="btn btn-primary w-100">Login</button>

</form>

<p class="text-center mt-3">
Belum punya akun? <a href="daftar.php">Daftar</a>
</p>

</div>
</div>

</body>
</html>