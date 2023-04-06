kosep model perulangan while <br>
<?php
$bil = 1;
while ($bil <= 3) {
    echo $bil . "<br>";
    $bil++;
}
?>

konsep model perulangan for <br>

<?php
for ($a = 1; $a <= 3; $a++) {
    echo $a . "<br>";
}
?>

while dalam nested <br>

<?php
$a = 1;
while ($a <= 3) {
    $b = 1;
    while ($b <= 2) {
        echo "nilai A : " . $a . " nilai B : " . $b . "<br>";
        $b++;
    }
    $a++;
}
?>

for dalam nested <br>

<?php
for ($a = 1; $a <= 3; $a++) {
    for ($b = 1; $b <= 2; $b++) {
        echo "nilai A : " . $a . " nilai B : " . $b . "<br>";
    }
}
?>