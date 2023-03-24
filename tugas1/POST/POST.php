<!DOCTYPE html>
<html>

<head>
    <title>perhitungan nilai dengan post</title>


</head>

<body>
    <h1>MENHITUNG NILAI MATKUL</h1>
    <form name="input" method="post" action="prosses.php">
        <table>
            <tr>
                <td>Masukkan Nilai Tugas </td>
                <td><input type="number" name="ntugas" /></td>
            </tr>
            <tr>
                <td>Masukkan Nilai UTS</td>
                <td><input type="number" name="nuts" /></td>
            </tr>
            <tr>
                <td>Masukkan Nilai UAS</td>
                <td><input type="number" name="nuas" /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td align="right"><input type="submit" value="hitung" /></td>
                <td><input type="reset" value="hapus" /></td>
            </tr>
        </table>
    </form>
</body>

</html>