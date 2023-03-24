<?php

error_reporting(0);
if (empty($_GET['tugas']) && empty($_GET['uts']) && empty($_GET['uas'])) {
    echo "tuliskan nilai variable tugas, uts, dan uas di URL, contoh :"; ?> <br>
<?php
    echo "/GET.php?tugas=90&uts=80&uas=70";
} else {
    $ntugas = $_GET['tugas'];
    $nuts = $_GET['uts'];
    $nuas = $_GET['uas'];

    $hitung = ($ntugas * 25) + ($nuts * 35) + ($nuas * 40);
    $hasil = $hitung / 100;
}

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
                <?php echo $ntugas ?>
            </td>
        </tr>
        <tr>
            <td>UTS</td>
            <td>
                <?php echo $nuts ?>
            </td>
        </tr>
        <tr>
            <td>UAS</td>
            <td>
                <?php echo $nuas ?>
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