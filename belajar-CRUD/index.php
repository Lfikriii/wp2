<h2>Halaman Tampil Data</h2>
<a href="add.php"><button>Tambah Data</button></a>

<table border="1">
    <tr>
        <td>NIM</td>
        <td>Nama Peserta</td>
        <td>Tgl Lahir</td>
        <td>Tempat Lahir</td>
        <td>Alamat</td>
        <td>Jenis Kelamin</td>
        <td>Tgl Daftar</td>
        <td>Informasi</td>
        <td>Action</td>
    </tr>
    <?php
    include "koneksi.php";
    $query = "SELECT * from peserta";
    $hasil = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($hasil)) {
        echo "<tr>
 <td>" . $data['nim'] . "</td>
 <td>" . $data['namaPeserta'] . "</td>
 <td>" . $data['tglLahir'] . "</td>
 <td>" . $data['tmptLahir'] . "</td>
 <td>" . $data['alamat'] . "</td>
 <td>" . $data['sex'] . "</td>
 <td>" . $data['tglDaftar'] . "</td>
 <td>" . $data['informasi'] . "</td>
 <td>
 <a href='edit.php?nim=" . $data['nim'] . "'>Edit</a> ||
 <a href='del.php?nim=" . $data['nim'] . "'onclick = \"return confirm('Yakin Data Akan 
Dihapus')\">Hapus</a> </td> 
 </td>
 </tr>";
    }

    // Menutup koneksi setelah selesai menggunakan hasil query
    mysqli_close($conn);
    ?>
</table>