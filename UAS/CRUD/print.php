<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <a href="index.php" class="btn btn-primary btn-rounded">Kembali</a>
    <div class="container">
        <?php
        include "koneksi.php";
        ?>

        <div class="col-md-6 mx-auto">
            <form method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="tcari" class="form-control" placeholder="masukkan kata kunci">
                    <button class="btn btn-primary" name="bcari" type="submit">Cari</button>
                    <button class="btn btn-danger" name="breset" type="submit">Reset</button>
                </div>
            </form>
        </div>

        <table class="table table-bordered table-striped table-hover mt-3">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Prodi</th>
            </tr>

            <?php
            // persiapan menampilkan data
            $no = 1;

            if (isset($_POST['bcari'])) {
                $keyword = $_POST['tcari'];
                $q = "SELECT * FROM tmhs WHERE nim like '%$keyword%' or nama like '%$keyword%' or alamat like '%$keyword%' or prodi like '%$keyword%' order by id_mhs ASC ";
            } else {
                $q = "SELECT * FROM tmhs ORDER BY id_mhs ASC";
            }
            $tampil = mysqli_query($koneksi, $q);
            while ($data = mysqli_fetch_array($tampil)) :
            ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data["nim"] ?></td>
                    <td><?= $data["nama"] ?></td>
                    <td><?= $data["alamat"] ?></td>
                    <td><?= $data["prodi"] ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>