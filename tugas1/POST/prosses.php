<?php
$tugas = $_POST['ntugas'];
$uts = $_POST['nuts'];
$uas = $_POST['nuas'];

$hitung = ($tugas * 25) + ($uts * 35) + ($uas * 40);
$hasil = $hitung / 100;

if ($hasil >= 80) {
    $index = "A";
} elseif ($hasil >= 70) {
    $index = "B";
} elseif ($hasil >= 55) {
    $index = "C";
} elseif ($hasil >= 40) {
    $index = "D";
} else {
    $index = "E";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>perhitungan nilai dengan post</title>

    <style>
        td {
            width: 50px;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>MENHITUNG NILAI MATKUL</h1>
    <table border="1">
        <tr>
            <th colspan="2">Nilai</th>
        </tr>
        <tr>
            <td>Tugas</td>
            <td>
                <?php echo $tugas ?>
            </td>
        </tr>
        <tr>
            <td>UTS</td>
            <td>
                <?php echo $uts ?>
            </td>
        </tr>
        <tr>
            <td>UAS</td>
            <td>
                <?php echo $uas ?>
            </td>
        </tr>
        <tr>
            <td>Hasil</td>
            <td>
                <?php echo $hasil ?>
            </td>
        </tr>
    </table>
    <br>

    <p>anda mendapatkan nilai <?php echo $hasil ?> dengan Index : <?php echo $index ?></p>
</body>

</html>