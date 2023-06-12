<?php
// panggil database
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>

    <style>
        body {
            background-image: url('gambar.png');
            /* Ganti path/to/background-image.jpg dengan path yang sesuai ke gambar latar belakang yang ingin Anda gunakan */
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="mt-3">
            <h1 class="text-center">LIST TUGAS INFORMATIKA '21</h1>
        </div>

        <div class="mt-3 h-">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    List Tugas
                </div>
                <div class="card-body">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#popupTambah">
                        Tambah Tugas
                    </button>
                    <!-- <a href="print.php" class="btn btn-warning">print</a> -->


                    <!-- search -->
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
                            <th>Matkul</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Deadline</th>
                            <th>Aksi</th>
                        </tr>

                        <?php
                        // persiapan menampilkan data
                        $no = 1;

                        if (isset($_POST['bcari'])) {
                            $keyword = $_POST['tcari'];
                            $q = "SELECT * FROM tugas WHERE matkul like '%$keyword%' or judul like '%$keyword%' or deadline like '%$keyword%' order by id_tugas ASC ";
                        } else {
                            $q = "SELECT * FROM tugas ORDER BY id_tugas ASC";
                        }
                        $tampil = mysqli_query($koneksi, $q);
                        while ($data = mysqli_fetch_array($tampil)) :
                        ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data["matkul"] ?></td>
                                <td><?= $data["judul"] ?></td>
                                <td><?= $data["deskripsi"] ?></td>
                                <td><?= $data["deadline"] ?></td>
                                <td>
                                    <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#popupUbah<?= $no ?>">Ubah</a>
                                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#popupHapus<?= $no ?>">Hapus</a>
                                </td>
                            </tr>
                            <!-- modal ubah -->
                            <div class=" modal fade" id="popupUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Tugas</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="aksi_crud.php">
                                            <input type="hidden" name="id_mhs" value="<?= $data['id_tugas'] ?>">
                                            <div class="modal-body">

                                                <!-- NIM -->
                                                <div class="mb-3">
                                                    <label class="form-label">Matkul</label>
                                                    <input type="text" class="form-control" name="tmatkul" value="<?= $data['matkul'] ?>" placeholder="Masukkan nama matkul">
                                                </div>

                                                <!-- nama -->
                                                <div class="mb-3">
                                                    <label class="form-label">Judul</label>
                                                    <input type="text" class="form-control" name="tjudul" value="<?= $data['judul'] ?>" placeholder="Masukkan judul tugas">
                                                </div>

                                                <!-- alamat -->
                                                <div class="mb-3">
                                                    <label class="form-label">Deskripsi</label>
                                                    <textarea class="form-control" name="tdeskripsi" rows="2"><?= $data['deskripsi'] ?></textarea>
                                                </div>

                                                <!-- prodi -->
                                                <div class="mb-3">
                                                    <label class="form-label">Deadline</label>
                                                    <input type="text" class="form-control" name="tdeadline" value="<?= $data['deadline'] ?>" placeholder="Masukkan deadline">
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                                                <button type="submit" class="btn btn-primary" name="bubah">Ubah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- modal hapus -->
                            <div class="modal fade" id="popupHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="aksi_crud.php">
                                            <input type="hidden" name="id_tugas" value="<?= $data['id_tugas'] ?>">
                                            <div class="modal-body">

                                                <h5 class="text-center">Apakah anda yakin ingin menghapus data ini?<br>
                                                    <span class="text-danger"><?= $data['matkul'] ?> - <?= $data['judul'] ?> </span>
                                                </h5>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                                                <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </table>



                    <!-- Modal tambah-->
                    <div class="modal fade" id="popupTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form List Tugas</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="aksi_crud.php">
                                    <div class="modal-body">

                                        <!-- NIM -->
                                        <div class="mb-3">
                                            <label class="form-label">NIM</label>
                                            <input type="text" class="form-control" name="tmatkul" placeholder="Masukkan nama matkul">
                                        </div>

                                        <!-- nama -->
                                        <div class="mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" class="form-control" name="tjudul" placeholder="Masukkan judul tugas">
                                        </div>

                                        <!-- alamat -->
                                        <div class="mb-3">
                                            <label class="form-label">deskripso</label>
                                            <textarea class="form-control" name="tdeskripsi" rows="2"></textarea>
                                        </div>

                                        <!-- prodi -->
                                        <div class="mb-3">
                                            <label class="form-label">deadline</label>
                                            <input type="text" class="form-control" name="tdeadline" placeholder="Masukkan deadline tugas">
                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>