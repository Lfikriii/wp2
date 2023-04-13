<?php
$x[3] = 10;
$x[2] = "aas";
$x[1] = 2023;

echo $x[3] . "<br>";
echo $x[2] . "<br>";
echo $x[1] . "<br>";
?>

<hr>

<?php
$x = array(10, 12, 30, "itbaas", 2023, 100);

echo $x[3] . "<br>";
echo $x[0] . "<br>";
?>

<hr>

<?php
$x = array(
    3 => 10,
    2 => 12,
    5 => 30,
    0 => "itbaas",
    1 => 2023,
    4 => 100,
);

echo $x[5] . "<br>";
echo $x[3] . "<br>";
echo $x[1] . "<br>";
?>

<hr>

<?php
$x = array(
    "kamar1" => 10,
    "kamar2" => 12,
    "kamar3" => 30,
    "kamar4" => "itbaas",
    "kamar5" => 2023,
    "kamar6" => 100,
);

echo $x["kamar1"] . "<br>";
echo $x["kamar2"] . "<br>";
echo $x["kamar4"] . "<br>";
?>

<hr>

<?php
$x = array(10, 12, 3, 44, 50, "halo");

for ($i = 0; $i <= 5; $i++) {
    echo "Nilai kamar ke " . $i . " dari array = " .  $x[$i] . "<br>";
}
?>

<hr>

<?php
$x = array(10, 12, 3, 44, 50, "halo", 3, 6, 21, 642, 124, 56);

for ($i = 0; $i <= count($x) - 1; $i++) {
    echo "Nilai kamar ke " . $i . " dari array = " .  $x[$i] . "<br>";
}
?>