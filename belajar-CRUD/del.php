<?php
include "koneksi.php";
$nim = $_GET['nim'];
mysqli_query($conn, "delete from peserta where nim='$nim'") or die(mysqli_error($conn));
header("location:index.php");
