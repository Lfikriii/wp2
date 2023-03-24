<?php
error_reporting(0);
$mahasiswa = [
    [
        "nama" => "NAQI ALI ALFIAN",
        "nim" => "2021TI034",
        "jurusan" => "INFORMATIKA"
    ],
    [
        "nama" => "MUHAMMAD AUSATHUL FIKRI",
        "nim" => "2021TI044",
        "jurusan" => "INFORMATIKA"
    ],
    [
        "nama" => "MUHAMMAD HABIB RIZKY",
        "nim" => "2021TI030",
        "jurusan" => "INFORMATIKA"
    ],
    [
        "nama" => "WAHYU DWI JAYANTO",
        "nim" => "2021TI038",
        "jurusan" => "INFORMATIKA"
    ]
]
?>

<h3>DAFTAR MAHASISWA</h3>
<p>silakan klik nama mahasiswa yang datanya ingin ditampilkan</p>
<ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a href="array.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"] ?></a>
        </li>
    <?php endforeach; ?>
</ul>

<h3>DATA MAHASISWA</h3>

<ul>
    <li><?= $_GET["nama"] ?></li>
    <li><?= $_GET["nim"] ?></li>
    <li><?= $_GET["jurusan"] ?></li>
</ul>