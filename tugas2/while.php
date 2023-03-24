<form action=" " method="post">
    Masukkan rentang awal <input type="text" name="awal"><br>
    Masukkan rentang akhir <input type="text" name="akhir">
    <input type="submit" value="hitung">
</form>

<?php
$awal = (int)$_POST["awal"];
$akhir = (int)$_POST["akhir"];
$jumlah = 0;

while ($awal <= $akhir) {
    if ($awal % 2 != 0) {
        $jumlah++;
    }
    $awal++;
}

echo "Jumlah bilangan ganjil dari $awal hingga $akhir adalah $jumlah";
?>