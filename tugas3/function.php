<form method="POST">
    <label for="bilangan">Masukkan bilangan:</label>
    <input type="number" name="bilangan" id="bilangan">
    <input type="submit" name="submit" value="Cek">
</form>


<?php
function cek_ganjil_genap($bilangan)
{
    if ($bilangan % 2 == 0) {
        return "Genap";
    } else {
        return "Ganjil";
    }
}

if (isset($_POST['submit'])) {
    $bilangan = $_POST['bilangan'];
    $hasil_cek = cek_ganjil_genap($bilangan);
    echo "Angka $bilangan adalah bilangan $hasil_cek.";
}
?>