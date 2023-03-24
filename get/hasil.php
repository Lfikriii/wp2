
<?php
$nama = $_GET['nama'];
$makul = $_GET['makul'];
$absen = $_GET['absen'];
$tugas = $_GET['tugas'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];

//menghitung nilai dari yang tadi kita input
$nilai_absen = $absen * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts   = $uts * 0.3;
$nilai_uas   = $uas * 0.4;

//penjumlahan dari nilai-nilai yang sudah diinput
$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;


//menampilkan grade berdasarkan hasil nilai akhir
if ($nilai_akhir >= 80) {
    $grade = "A";
} elseif ($nilai_akhir >= 70) {
    $grade = "B";
} elseif ($nilai_akhir >= 50) {
    $grade = "C";
} elseif ($nilai_akhir >= 40) {
    $grade = "D";
} else {
    $grade = "E";
}

echo " <h1>Hitung Nilai AKhir Mahasiswa</h1>
Nama Mahasiswa : $nama <br>
Mata Kuliah : $makul <br>
Nilai Absen : <b>$nilai_absen</b><br>
Nilai Tugas : <b>$nilai_tugas</b><br>
Nilai UTS   : <b>$nilai_uts</b><br>
Nilai UAS   : <b>$nilai_uas</b><br>
<h4>Nilai Akhir : $nilai_akhir</h4>
<h4>Grade : $grade</h4>";
?>