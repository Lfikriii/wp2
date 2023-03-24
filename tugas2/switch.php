<h3>MEMILIH HARI</h3>
<form method="post" action="">
    <button name="day" value="senin">Senin</button>
    <button name="day" value="selasa">Selasa</button>
    <button name="day" value="rabu">Rabu</button>
    <button name="day" value="kamis">Kamis</button>
    <button name="day" value="jumat">Jumat</button>
    <button name="day" value="sabtu">Sabtu</button>
    <button name="day" value="minggu">Minggu</button>
</form>


<?php
if (isset($_POST['day'])) {
    $day = $_POST['day'];
    switch ($day) {
        case 'senin':
            echo "Anda memilih hari Senin";
            break;
        case 'selasa':
            echo "Anda memilih hari Selasa";
            break;
        case 'rabu':
            echo "Anda memilih hari Rabu";
            break;
        case 'kamis':
            echo "Anda memilih hari Kamis";
            break;
        case 'jumat':
            echo "Anda memilih hari Jumat";
            break;
        case 'sabtu':
            echo "Anda memilih hari Sabtu";
            break;
        case 'minggu':
            echo "Anda memilih hari Minggu";
            break;
        default:
            echo "Tidak ada hari yang dipilih";
            break;
    }
}
?>