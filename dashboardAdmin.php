<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['is_admin'] !== true){
    header('location: pertemuan1.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ubah.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Reservasi Admin</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard Admin</a>
  </div>
</nav>

<center>
<h1>Data Reservasi</h1>

<table class="table table-success table-striped">
  <thead>
    <tr>
      <th>Username</th>
      <th>Jumlah Orang</th>
      <th>Tanggal</th>
      <th>Jam</th>
      <th>Handle</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $query = "SELECT reservasi.id, username, jumlah_orang, tanggal, jam 
              FROM reservasi 
              LEFT JOIN users ON users.id = reservasi.id_user";

    $result = mysqli_query($koneksi, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['jumlah_orang']."</td>";
        echo "<td>".$row['tanggal']."</td>";
        echo "<td>".$row['jam']."</td>";
    ?>
        <td>
            <a href="hapusReservasi.php?id=<?php echo $row['id']; ?>">
            <button class="btn btn-danger">Hapus</button>
            </a>
        </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

</center>
</body>
</html>