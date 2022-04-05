<?php
include 'koneksi.php';

$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_daftar='" . $_GET['id'] . "'");
$p = mysqli_fetch_object($peserta);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>PSB Online</title>
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
            <h1>Bukti Pendaftaran</h1>

            <table class="fontsize table">
                <tr>
                    <td>
                        <img src="img/<?= $p->foto ?>" width="150">
                    </td>
                </tr>
                <tr>
                    <td>Kode Pendaftaran</td>
                    <td>:</td>
                    <td><?= $p->id_daftar ?></td>
                </tr>
                <tr>
                    <td>Tahun Ajaran</td>
                    <td>:</td>
                    <td><?= $p->tahun_ajaran ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?= $p->nm_peserta ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $p->tmp_lahir . ', ' . $p->tgl_lahir ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $p->jenkel ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $p->agama ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $p->almt_peserta ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>