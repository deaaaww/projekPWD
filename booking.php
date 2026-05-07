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
<title>Form Reservasi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<div class="card p-4">

<h3>Form Reservasi</h3>

<form action="otwBooking.php" method="POST">

  <div class="mb-3">
    <label>Jumlah Orang</label>
    <input type="number" name="jumlah_orang" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Tanggal</label>
    <input type="date" name="tanggal" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Jam</label>
    <select name="jam" class="form-control" required>
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

  <button class="btn btn-primary w-100">Reservasi</button>

</form>

</div>
</div>

</body>
</html>