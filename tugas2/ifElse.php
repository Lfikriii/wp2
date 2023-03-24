<h3>MASUKKAN TOTAL BARANG YANG DIBELI</h3>
<form action="ifElse.php" method="post">
    <input type="text" name="j">
    <input type="submit" value="proses">
    <input type="reset" value="hapus">
</form>


<?php
error_reporting(0);
$jumlah = $_POST["j"];

if (empty($_POST['j'])) {
} elseif ($jumlah > 20) {
    echo "anda membeli barang dengan jumlah " . $jumlah . " item, dengan diskon 30%";
} elseif ($jumlah > 15) {
    echo "anda membeli barang dengan jumlah " . $jumlah . " item, dengan diskon 25%";
} elseif ($jumlah > 10) {
    echo "anda membeli barang dengan jumlah " . $jumlah . " item, dengan diskon 20%";
} else {
    echo "anda membeli barang dengan jumlah " . $jumlah . " item, tanpa mendapatkan diskon";
}
?>