<form action="ifElse.php" method="post">
    <input type="text" name="n">
    <input type="submit" value="proses">
    <input type="reset" value="hapus">
</form>

<?php
$nilai = $_POST["n"];

if ($nilai > 100) {
    echo "nilai kelebihan";
} elseif ($nilai >= 90) {
    echo "A";
} elseif ($nilai < 0) {
    echo "nilai tidak tersedia";
} elseif ($nilai >= 80) {
    echo "B";
} else {
    echo "C";
}

?>