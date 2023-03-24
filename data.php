<?php
error_reporting(0);
?>
<form name="input" method="post" action="data.php">
    Masukkan Bilangan 1 <input type="text" name="bil1" /><br />
    Masukkan Bilangan 2 <input type="text" name="bil2" /><br />
    <input type="submit" value="hitung" />
    <input type="reset" value="hapus" />
</form>

<?php
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];

$jumlah =  $bil1 + $bil2;
echo "penjumlahan dari " . $bil1 . " + " . $bil2 . " adalah " . $jumlah;

?>