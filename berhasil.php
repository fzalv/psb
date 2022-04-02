<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>PSB Online</title>
</head>

<body>
    <div class="container">
        <div class="my-5">
            <h2 class="text-center">Pendaftaran Berhasil</h2>
            <div class="card mx-auto" style="width: 30rem;">
                <h5 class="text-center">Kode Pendaftaran Anda Adalah <?= $_GET['id'] ?></h5>
                <a href="cetak.php?id=<?= $_GET['id'] ?>" target="_blank" class="btn btn-primary">Cetak Bukti Daftar</a>
            </div>
        </div>
    </div>
</body>

</html>