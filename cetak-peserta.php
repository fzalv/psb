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
    <title>Cetak Peserta</title>
    <style>
        h1 {
            font-size: 50px;
        }

        .fontsize {
            font-size: 20px;
        }
    </style>

    <script>
        window.print();
    </script>
</head>

<body>
    <div class="container">
        <div class="my-5">
            <h1>Laporan Calon Siswa</h1>

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Pendaftaran</th>
                        <th scope="col">Tahun Ajaran</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat, Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Alamat</th>
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
                            <td><?= $row['tahun_ajaran'] ?></td>
                            <td><?= $row['nm_peserta'] ?></td>
                            <td><?= $row['tmp_lahir'] . ', ' . $row['tgl_lahir'] ?></td>
                            <td><?= $row['jenkel'] ?></td>
                            <td><?= $row['agama'] ?></td>
                            <td><?= $row['almt_peserta'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>