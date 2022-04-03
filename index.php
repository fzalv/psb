<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $getmaxid = mysqli_query($conn, "SELECT max(right(id_daftar , 5)) as id FROM tb_pendaftaran");
    $d = mysqli_fetch_object($getmaxid);
    $generateid = 'P' . date('Y') . sprintf('%05s', $d->id + 1);

    $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
        '" . $generateid . "',
        '" . date('Y-m-d') . "',
        '" . $_POST['tahunajar'] . "',
        '" . $_POST['nama'] . "',
        '" . $_POST['tempat_lahir'] . "',
        '" . $_POST['tgl_lahir'] . "',
        '" . $_POST['jenkel'] . "',
        '" . $_POST['agama'] . "',
        '" . $_POST['alamat'] . "'
    )");

    if ($insert) {
        echo '<script>window.location="berhasil.php?id=' . $generateid . '"</script>';
    } else {
        echo "gagal" . mysqli_error($conn);
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>PSB Online</title>
</head>

<body>
    <div class="container my-5">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mx-auto">
                        <div class=" card-body">
                            <h5 class="card-title">Formulir Pendaftaran Siswa Baru SMK</h5>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="tahunajar">Tahun Ajaran</label>
                                    <input type="text" class="form-control text-center" name="tahunajar" value="2021/2022" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mx-auto" style="width: 30rem;">
                        <div class="card-body">
                            <h5 class="card-title">Data Diri Calon Siswa</h5>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="jenkel">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenkel" value="Laki-Laki" checked>
                                        <label class="form-check-label" for="jenkel_laki">
                                            Laki-Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenkel" value="Perempuan">
                                        <label class="form-check-label" for="jenkel_per">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="agama">Agama</label>
                                    <select class="form-control" name="agama">
                                        <option value="" class="text-center">-- Pilih --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Khonghucu">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="alamat">Alamat Lengkap</label>
                                    <textarea class="form-control" name="alamat"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Daftar Sekarang" />
                    </div>
                </div>
            </div>
        </form>
    </div>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>