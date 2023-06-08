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
$query = "update peserta set 
nim ='$nim',
namaPeserta ='$nama',
tglLahir ='$tglLahir',
tmptLahir ='$tmptLahir',
sex ='$sex',
alamat ='$alamat',
tglDaftar ='$tglDaftar',
informasi ='$info'
where nim = '$nim'";
$hasilQuery = mysqli_query($conn, $query);
if ($hasilQuery) {
    echo "Data suksess terupdate di database";
} else {
    echo "Data gagal terupdate di database";
}
header("location:index.php");
