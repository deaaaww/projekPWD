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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Khusus admin</title>
</head>
<body>
  <nav class="nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="dashboardAdmin.php">Dashboard Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">Akun</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">List Kucing</a>
      </li>
    </ul>
  </nav>

  <center>
        <h1>Khusus admin coy</h1>
        <table class="table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">user</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    $query = "Select * from users";
    $result = mysqli_query($koneksi, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<th scope='row'>" . $row['id'] . "</th>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['role'] . "</td>";
    ?>
      <td><a href="hapusAkun.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">hapus</button></a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    </center>
</body>
</html>