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
<title>Reservasi Berhasil</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background-color: #f8f9fa;
}

.card-success{
    max-width: 500px;
    margin: 100px auto;
    border-radius: 20px;
    padding: 40px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.check{
    font-size: 70px;
}
</style>
</head>

<body>

<div class="card bg-white card-success">

    <div class="check">✅</div>

    <h2 class="mt-3">Reservasi Berhasil!</h2>

    <p class="text-muted">
        Terima kasih sudah melakukan reservasi di Svarga.
    </p>

    <p>
        Sampai jumpa, 
        <strong>
            <?php echo $_SESSION['user_name']; ?>
        </strong>
    </p>

    <a href="index.html" class="btn btn-warning mt-3">
        Kembali ke Home
    </a>

</div>

</body>
</html>