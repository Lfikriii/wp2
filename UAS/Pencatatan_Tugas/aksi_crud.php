<?php

// panggil koneksi database
include "koneksi.php";

// uji jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {

    // persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO tugas (matkul, judul, deskripsi, deadline)
                                      VALUES  ('$_POST[tmatkul]',
                                               '$_POST[tjudul]',
                                               '$_POST[tdeskripsi]',
                                               '$_POST[tdeadline]')");

    // jika simpan sukses
    if ($simpan) {
        echo "<script>
            alert ('simpan data sukses');
            document.location='index.php';
        </script>";
    } else {
        echo "<script>
            alert ('simpan data gagal');
            document.location='index.php';
        </script>";
    }
}


// uji jika tombol ubah diklik
if (isset($_POST['bubah'])) {

    // persiapan ubah data baru
    $ubah = mysqli_query($koneksi, "UPDATE  tugas SET
                                                        matkul = '$_POST[tmatkul]',
                                                        judul = '$_POST[tjudul]',
                                                        deskripsi = '$_POST[tdeskripsi]',
                                                        deadline = '$_POST[tdeadline]'
                                                        WHERE id_tugas = $_POST[id_tugas]");

    // jika ubah sukses
    if ($ubah) {
        echo "<script>
            alert ('ubah data sukses');
            document.location='index.php';
        </script>";
    } else {
        echo "<script>
            alert ('ubah data gagal');
            document.location='index.php';
        </script>";
    }
}


// uji jika tombol hapus diklik
if (isset($_POST['bhapus'])) {

    // persiapan hapus data baru
    $hapus = mysqli_query($koneksi, "DELETE FROM tugas WHERE id_tugas = '$_POST[id_tugas]' ");

    // jika hapus sukses
    if ($hapus) {
        echo "<script>
            alert ('hapus data sukses');
            document.location='index.php';
        </script>";
    } else {
        echo "<script>
            alert ('hapus data gagal');
            document.location='index.php';
        </script>";
    }
}
