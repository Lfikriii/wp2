<h2>Halaman Input Data</h2>
<form name="input" method="post" action="proses_add.php">
    <table border="0">
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tmptLahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <select name="tgl">
                    <?php
                    for ($i = 1; $i <= 31; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                    ?>
                </select>
                <select name="bln">
                    <?php
                    $bulan = array(
                        "-", "Januari", "Febuari", "Maret", "April", "Mei", "Juni",
                        "Juli", "Agustus", "September", "Oktober", "November", "Dosember"
                    );
                    for ($i = 1; $i <= 12; $i++) {
                        echo "<option value='" . $bulan[$i] . "'>" . $bulan[$i] . "</option>";
                    }
                    ?>
                </select>
                <select name="thn">
                    <?php
                    for ($i = 1990; $i <= 2004; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                    ?>
                </select>
            </td>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="sex" value="Laki-Laki">Laki-Laki
                <input type="radio" name="sex" value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td>Informasi</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="info1" value="Internet">Internet
                <input type="checkbox" name="info2" value="TV">TV
                <input type="checkbox" name="info3" value="Koran">Koran
                <input type="checkbox" name="info4" value="Radio">Radio
            </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td>
                <input type="submit" name="submit" value="simpan">
                <input type="reset" name="reset" value="hapus">
            </td>
        </tr>
    </table>
</form>
<hr>
<a href="index.php"><button>Kembali</button></a>
<i>Untuk Kembali ke Halaman Utama</i>