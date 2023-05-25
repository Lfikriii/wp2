<?php
// perintah absolute (merubah nilai negati menjadi positif)
$x = -6;
echo "nilai asli = " . $x . "<br>";
echo "nilai absolute = " . abs($x);
?>

<hr>

<?php
// pembulatan ke atas
$a = 4.6;
$b = 4.1;
echo ceil($a) . "<br>" . ceil($b);
?>

<hr>

<?php
// pembulatan ke bawah
$a = 4.6;
$b = 4.1;
echo floor($a) . "<br>" . floor($b);
?>

<hr>

<?php
$data = array(3, 6, 1, 2, 7, 8, 9);

echo "nilai max = " . max($data) . "<br>";
echo "nilai min = " . min($data);
?>

<hr>

<?php
// random
$acak = mt_rand(1, 10);

echo $acak
?>

<hr>

<?php
// perpangkatan
echo pow(3, 2);
?>

<hr>

<?php
echo round(10.3) . "<br>";
echo round(10.7) . "<br>";
echo round(10.5) . "<br>";
?>

<hr>

<?php
$nim = array("M0197002", "M0197004", "M0197001", "M0197008", "M0197003",);
$nama = array("Amir", "Budi", "Siti", "Agus", "habib");

array_multisort($nim, SORT_ASC, $nama);

for ($i = 0; $i <= count($nim) - 1; $i++) {
    echo $nim[$i] . " " . $nama[$i] . "<br>";
}
?>