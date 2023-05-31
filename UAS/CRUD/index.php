<?php
// panggil database
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="mt-3">
            <h1 class="text-center">DATA MAHASISWA ITB AAS INDONESIA</h1>
        </div>

        <div class="mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Data Mahasiswa
                </div>
                <div class="card-body">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#popupTambah">
                        Tambah Mahasiswa
                    </button>
                    <a href="print.php" class="btn btn-warning">print</a>


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
                            <th>NIM</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Prodi</th>
                            <th>Aksi</th>
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
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Mahasiswa</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="aksi_crud.php">
                                            <input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">
                                            <div class="modal-body">

                                                <!-- NIM -->
                                                <div class="mb-3">
                                                    <label class="form-label">NIM</label>
                                                    <input type="text" class="form-control" name="tnim" value="<?= $data['nim'] ?>" placeholder="Masukkan NIM">
                                                </div>

                                                <!-- nama -->
                                                <div class="mb-3">
                                                    <label class="form-label">Nama</label>
                                                    <input type="text" class="form-control" name="tnama" value="<?= $data['nama'] ?>" placeholder="Masukkan Nama Lengkap">
                                                </div>

                                                <!-- alamat -->
                                                <div class="mb-3">
                                                    <label class="form-label">Alamat</label>
                                                    <textarea class="form-control" name="talamat" rows="2"><?= $data['alamat'] ?></textarea>
                                                </div>

                                                <!-- prodi -->
                                                <div class="mb-3">
                                                    <label class="form-label">Prodi</label>
                                                    <select class="form-select" name="tprodi">
                                                        <option value="<?= $data['prodi'] ?>"><?= $data['prodi'] ?></option>
                                                        <option value="S1 - Informatika">S1 - Informatika</option>
                                                        <option value="S1 - Ekonomi Syariah">S1 - Ekonomi Syariah</option>
                                                        <option value="S1 - Akuntansi">S1 - Akuntansi</option>
                                                    </select>
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
                                            <input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">
                                            <div class="modal-body">

                                                <h5 class="text-center">Apakah anda yakin ingin menghapus data ini?<br>
                                                    <span class="text-danger"><?= $data['nim'] ?> - <?= $data['nama'] ?> </span>
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



                    <!-- Modal tampil-->
                    <div class="modal fade" id="popupTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Mahasiswa</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="aksi_crud.php">
                                    <div class="modal-body">

                                        <!-- NIM -->
                                        <div class="mb-3">
                                            <label class="form-label">NIM</label>
                                            <input type="text" class="form-control" name="tnim" placeholder="Masukkan NIM">
                                        </div>

                                        <!-- nama -->
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="tnama" placeholder="Masukkan Nama Lengkap">
                                        </div>

                                        <!-- alamat -->
                                        <div class="mb-3">
                                            <label class="form-label">Alamat</label>
                                            <textarea class="form-control" name="talamat" rows="2"></textarea>
                                        </div>

                                        <!-- prodi -->
                                        <div class="mb-3">
                                            <label class="form-label">Prodi</label>
                                            <select class="form-select" name="tprodi">
                                                <option></option>
                                                <option value="S1 - Informatika">S1 - Informatika</option>
                                                <option value="S1 - Ekonomi Syariah">S1 - Ekonomi Syariah</option>
                                                <option value="S1 - Akuntansi">S1 - Akuntansi</option>
                                            </select>
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