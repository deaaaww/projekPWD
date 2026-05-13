<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}   


$id_user = $_SESSION['user_id'];

$jumlah = $_POST['jumlah_orang'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$id_menu = $_POST['id_menu'];

if (
    empty($jumlah) ||
    empty($tanggal) ||
    empty($jam) ||
    empty($id_menu)
) {
    echo "Data tidak boleh kosong";
    exit();
}

$ambil = mysqli_query(
    $koneksi,
    "SELECT * FROM menu WHERE id_menu='$id_menu'"
);

$dataMenu = mysqli_fetch_assoc($ambil);

$nama_menu = $dataMenu['nama_menu'];
$harga = $dataMenu['harga'];
$foto = $dataMenu['foto'];

$query = "INSERT INTO reservasi (id_user, jumlah_orang, tanggal, jam, id_menu) VALUES ('$id_user', '$jumlah', '$tanggal', '$jam', '$id_menu')";
if (mysqli_query($koneksi, $query)) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Reservasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background-color: #f5f5f5;
        }

        .nota{
            max-width: 600px;
            margin: 50px auto;
            border-radius: 20px;
        }

        .foto-menu{
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="card shadow p-4 nota">

        <h2 class="text-center mb-4">
            NOTA RESERVASI
        </h2>

        <img src="<?php echo $foto; ?>" class="foto-menu">

        <table class="table table-bordered mt-4">

            <tr>
                <th>Nama Pemesan</th>

                <td>
                    <?php echo $_SESSION['user_name']; ?>
                </td>
            </tr>

            <tr>
                <th>Jumlah Orang</th>

                <td>
                    <?php echo $jumlah; ?>
                </td>
            </tr>

            <tr>
                <th>Tanggal</th>

                <td>
                    <?php echo $tanggal; ?>
                </td>
            </tr>

            <tr>
                <th>Jam</th>

                <td>
                    <?php echo $jam; ?>
                </td>
            </tr>

            <tr>
                <th>Menu Pesanan</th>

                <td>
                    <?php echo $nama_menu; ?>
                </td>
            </tr>

            <tr>
                <th>Harga</th>

                <td>
                    Rp <?php echo number_format($harga,0,',','.'); ?>
                </td>
            </tr>

        </table>

        <div class="text-center">

            <a href="menu.php" class="btn btn-dark">
                Kembali ke Menu
            </a>

        </div>

    </div>

</div>

</body>
</html>

<?php

} else {

    echo "Gagal booking : " . mysqli_error($koneksi);

}

?>