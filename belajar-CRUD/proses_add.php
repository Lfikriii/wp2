<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tmptLahir = $_POST['tmptLahir'];
$tglLahir = $_POST['tgl'] . "-" . $_POST['bln'] . "-" . $_POST['thn'];
$sex = $_POST['sex'];
$tglDaftar = date("Y-m-d");
$info = $_POST['info1'] . "-" . $_POST['info2'] .
    "-" . $_POST['info3'] . "-" . $_POST['info4'];
$query = "insert into peserta (nim,namaPeserta,tglLahir,tmptLahir,
sex,alamat,tglDaftar,informasi)value('$nim','$nama','$tglLahir',
'$tmptLahir','$sex','$alamat','$tglDaftar','$info')";
$hasilQuery = mysqli_query($conn, $query);
if ($hasilQuery) {
    echo "Data suksess tersimpan di database";
} else {
    echo "Data gagal tersimpan di database";
}
header("location:index.php");
