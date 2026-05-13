<?php
session_start();
include 'koneksi.php';

if($_SESSION['user_role'] != 'admin'){
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

$menu = mysqli_query(
    $koneksi,
    "SELECT * FROM menu WHERE id_menu='$id'"
);

$data = mysqli_fetch_assoc($menu);

if(isset($_POST['edit'])){

    $nama_menu = $_POST['nama_menu'];
    $harga = $_POST['harga'];

    
    if($_FILES['foto']['name'] != ""){

        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        $path = "photo/" . $foto;

        move_uploaded_file($tmp, $path);

    } else {

        
        $path = $data['foto'];

    }

    $update = mysqli_query(
        $koneksi,

        "UPDATE menu SET

        nama_menu = '$nama_menu',
        harga = '$harga',
        foto = '$path'

        WHERE id_menu = '$id'"
    );

    if($update){

        header("Location: dashboardAdmin.php");
        exit();

    } else {

        echo "Gagal edit menu";

    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background-color: #f5f5f5;
        }

        .card-edit{
            max-width: 500px;
            margin: 50px auto;
            border-radius: 20px;
        }

        .preview{
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="card shadow p-4 card-edit">

        <h2 class="text-center mb-4">
            Edit Menu
        </h2>

        <form method="POST"
              enctype="multipart/form-data">

            <img src="<?php echo $data['foto']; ?>"
                 class="preview">

            <div class="mb-3">

                <label class="form-label">
                    Nama Menu
                </label>

                <input type="text"
                       name="nama_menu"
                       class="form-control"

                       value="<?php echo $data['nama_menu']; ?>"

                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Harga
                </label>

                <input type="number"
                       name="harga"
                       class="form-control"

                       value="<?php echo $data['harga']; ?>"

                       required>

            </div>

            <div class="mb-4">

                <label class="form-label">
                    Ganti Foto
                </label>

                <input type="file"
                       name="foto"
                       class="form-control">

            </div>

            <button type="submit"
                    name="edit"
                    class="btn btn-dark w-100">

                Simpan Perubahan

            </button>

        </form>

    </div>

</div>

</body>
</html>