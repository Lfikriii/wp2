<h2>Halaman Update Data</h2>
<?php
include "koneksi.php";
$nim = $_GET['nim'];
$query = "select * from peserta where nim ='$nim'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
echo "<form name='edit' method='post' action='update.php'>";
echo "NIM : <input type='text' name='nim' value='" . $data['nim'] . "'readonly><br>";
echo "Nama : <input type='text' name='nama' value='" . $data['namaPeserta'] . "'><br>";
echo "Tempat Lahir : <input type='text' name='tmptLahir' value='" . $data['tmptLahir'] . "'><br>";
echo "Alamat : <input type='text' name='alamat' value='" . $data['alamat'] . "'><br>";
echo "Jenis Kelamin : 
<input type='radio' name='sex' value='Laki-Laki'>Laki-Laki
<input type='radio' name='sex' value='Perempuan'>Perempuan
<br>";
echo "Tgl Lahir : <select name='tgl'>";
for ($i = 1; $i <= 31; $i++) {
    echo "<option value='" . $i . "'>" . $i . "</option>";
}
echo "</select>";
echo "<select name='bln'>";
$bulan = array(
    "-", "Januari", "Febuari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "November", "Dosember"
);
for ($i = 1; $i <= 12; $i++) {
    echo "<option value='" . $bulan[$i] . "'>" . $bulan[$i] . "</option>";
}
echo "</select>";
echo "<select name='thn'>";
for ($i = 1990; $i <= 2004; $i++) {
    echo "<option value='" . $i . "'>" . $i . "</option>";
}
echo "</select><br>";
echo "Tgl Daftar : <input type='text' name='tglDaftar' value='" . $data['tglDaftar'] . "' 
readonly><br>";
echo "Informasi : 
<input type='checkbox' name='info1' value='Internet'>Internet
<input type='checkbox' name='info2' value='TV'>TV
<input type='checkbox' name='info3' value='Koran'>Koran
<input type='checkbox' name='info4' value='Radio'>Radio<br>";
echo "<input type='submit' name='submit' value='Edit'>";
echo "<input type='reset' name='reset' value='Hapus'>";
echo "</form>";
?>
<hr>
<a href="index.php"><button>Kembali</button></a>
<i>Untuk Kembali ke Halaman Utama</i>