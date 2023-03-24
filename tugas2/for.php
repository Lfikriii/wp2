<h3>TABEL</h3>
<form action="for.php" method="post">
    Masukkan Baris <input type="text" name="baris"><br>
    Masukkan Kolom <input type="text" name="kolom">
    <input type="submit" value="proses">
</form>

<?php
$b = $_POST['baris'];
$k = $_POST['kolom'];

echo "<table border='1'>";
for ($i = 1; $i <= $b; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $k; $j++) {
        echo "<td>" . $i . "," . $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
