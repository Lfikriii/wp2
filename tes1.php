<body bgcolor="cyan">
    <?php
    echo "<b>Hello World</b>";
    echo "<font color='red'>Hello World</font>";
    echo "Hello World <br>";
    echo "Hello World <br>";
    ?>
    <hr>

    <?php
    $teks = "Hello World";
    $sebuah_bilangan = 4;
    $bilanganYangLain = 8.567;
    $teks2 = $teks;

    echo $teks2;
    echo "<br>" . $sebuah_bilangan;
    echo "<br>isi dari variable\$bilanganYangLain :" . $bilanganYangLain;
    echo "<br>isi dari variable\$teks2 :" . $teks2;
    ?>

    <hr>
    <?php
    echo "<font color='red'>I love using PHP!</font><br>";
    echo "<font color=red>I love using PHP!</font><br>";
    echo "<font color=\"red\">I love using PHP!</font>";
    ?>

    <hr>
    <?php
    $a = ($b = 4) + 5;
    echo $a;
    ?>

    <hr>
    <?php
    $a = 10;
    $a = 9;
    $a = 4;

    echo $a;
    ?>

    <hr>
    <?php
    $a = 10;
    // mengecek apakah variabel $a bertipe string atau bukan
    // jika $a string, maka tampilkan ‘$a bertipe string’
    // jika $a bukan string, maka tampilkan ‘$a bukan string’
    if (is_string($a)) echo "\$a bertipe string<br>";
    else echo "\$a bukan string<br>";

    $a = "Pemrograman PHP is OK";
    // mengecek apakah variabel $a bertipe string atau bukan
    // jika $a string, maka tampilkan ‘$a bertipe string’
    // jika $a bukan string, maka tampilkan ‘$a bukan string’
    if (is_string($a)) echo "\$a bertipe string<br>";
    else echo "\$a bukan string<br>";
    ?>

    <hr>
    <?php
    $penjumlahan = 2 + 4;
    $pengurangan = 6 - 2;
    $perkalian = 5 * 3;
    $pembagian = 15 / 3;
    $modulus = 5 % 2;
    echo "Hasil: 2 + 4 = " . $penjumlahan . "<br>";
    echo "Hasil: 6 - 2 = " . $pengurangan . "<br>";
    echo "Hasil: 5 * 3 = " . $perkalian . "<br>";
    echo "Hasil: 15 / 3 = " . $pembagian . "<br>";
    echo "Hasil: 5 % 2 = " . $modulus;
    ?>

    <hr>
    <?php
    $a = 3 + 4 * 5 - 6;
    echo $a;
    ?>

    <hr>
    <?php
    $a = (3 + (4) * (5) - 6);
    $b = 9;
    echo $a . "<br>";
    echo pow($b, 2) . "<br>";
    echo sqrt($b);
    ?>

    <hr>
    <?php
    $x = 4;
    $x++;
    echo "Nilai x yang baru : " . $x;
    $x = 4;
    $x--;
    echo "<br>Nilai x yang baru : " . $x;
    ?>

    <hr>
    <?php
    $saldoAwal = 1000000;
    $bunga = 0.03;
    $bulan = 11;
    $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga) * $bulan;
    echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . $saldoAkhir . ",-";
    ?>

    <hr>

    <?php
    $bilangan1 = 2;
    $bilangan2 = 6;

    $jumlah = $bilangan1 + $bilangan2;

    echo "Hasil penjumlahannya adalah " . $jumlah;
    ?>
</body>