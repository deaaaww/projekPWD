<?php
session_start();
include 'koneksi.php';

if($_SESSION['user_role'] != 'admin'){
    header("Location: login.php");
    exit();
}

if(isset($_POST['simpan'])){

    $nama_menu = $_POST['nama_menu'];
    $harga = $_POST['harga'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    
    $path = "photo/" . $foto;

    
    move_uploaded_file($tmp, $path);

    
    $query = mysqli_query(
        $koneksi,

        "INSERT INTO menu
        (nama_menu, harga, foto)

        VALUES

        ('$nama_menu', '$harga', '$path')"
    );

    if($query){

        header("Location: dashboardAdmin.php");
        exit();

    } else {

        echo "Gagal tambah menu";

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">

    <title>Tambah Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background-color: #f5f5f5;
        }

        .card-tambah{
            max-width: 500px;
            margin: 50px auto;
            border-radius: 20px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="card shadow p-4 card-tambah">

        <h2 class="text-center mb-4">
            Tambah Menu
        </h2>

        <form method="POST" enctype="multipart/form-data">

            <div class="mb-3">

                <label class="form-label">
                    Nama Menu
                </label>

                <input type="text"
                       name="nama_menu"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Harga
                </label>

                <input type="number"
                       name="harga"
                       class="form-control"
                       required>

            </div>

            <div class="mb-4">

                <label class="form-label">
                    Foto Menu
                </label>

                <input type="file"
                       name="foto"
                       class="form-control"
                       required>

            </div>

            <button type="submit"
                    name="simpan"
                    class="btn btn-dark w-100">

                Tambah Menu

            </button>

        </form>

    </div>

</div>

</body>
</html>