<?php
for ($a = 1; $a <= 5; $a++) {
    echo $a;
}
?>

<hr>

<?php
$x = "nomer";

for ($a = 1; $a <= 5; $a++) {
    echo "<h" . $a . ">" . $x . $a . "</>";
}
?>

<hr>

<?php
for ($a = 1; $a <= 3; $a++) {
    for ($b = 1; $b <= 2; $b++) {
        echo "nilai a" . $a . "-" . "nilai b" . $b . "<br>";
    }
}
?>

<hr>

<?php
for ($i = 1; $i <= 10; $i += 2) {
    echo $i . "<br>";
}
?>

<hr>

<?php
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . "<br>";
}
?>

<hr>

<?php
for ($a = 5; $a <= 100; $a++) {
    if ($a % 10 == 0) {
        echo $a . "<br>";
    }
}
?>

<hr>

<?php
$jumlah = 0;

for ($a = 1; $a <= 5; $a++) {
    $jumlah = $jumlah + $a;
}
echo "hasilnya : " . $jumlah;
?>

<hr>

<?php
$jumbaris = 10;
$jumkolom = 6;

echo "<table border='1'>";
for ($baris = 1; $baris <= $jumbaris; $baris++) {
    echo "<tr>";
    for ($kolom = 1; $kolom <= $jumkolom; $kolom++) {
        echo "<td>" . $baris . "," . $kolom . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<hr>

<form action="" method="post">
    Masukkan Baris <input type="text" name="baris"><br>
    Masukkan Kolom <input type="text" name="kolom">
    <input type="submit" value="proses">
</form>

<?php
$jumbaris = $_POST['baris'];
$jumkolom = $_POST['kolom'];

echo "<table border='1'>";
for ($baris = 1; $baris <= $jumbaris; $baris++) {
    echo "<tr>";
    for ($kolom = 1; $kolom <= $jumkolom; $kolom++) {
        echo "<td>" . $baris . "," . $kolom . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<hr>

pilih tahun:
<?php
echo "<select name='th'>";
for ($a = 1990; $a <= 2100; $a++) {
    echo "<option value=" . $a . ">" . $a . "</>";
}
echo "</select>";
?>