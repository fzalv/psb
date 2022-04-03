<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>PSB Online | Admin</title>
</head>

<body>
    <div class="container">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Admin PSB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="beranda.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data-peserta.php">Data Peserta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keluar.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <table class="table mt-5">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Pendaftaran</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $listPeserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                while ($row = mysqli_fetch_array($listPeserta)) {
                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $row['id_daftar'] ?></td>
                        <td><?= $row['nm_peserta'] ?></td>
                        <td><?= $row['jenkel'] ?></td>
                        <td>
                            <a href="detail-peserta.php?id=<?= $row['id_daftar'] ?>" class="btn btn-primary">Detail</a>
                            <a href="hapus-peserta.php?id=<?= $row['id_daftar'] ?>" onclick="return confirm('Yakin ?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>