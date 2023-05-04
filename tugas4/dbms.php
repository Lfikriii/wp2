<!DOCTYPE html>
<html>

<head>
    <title>CRUD Mahasiswa</title>
</head>

<body>
    <h1>CRUD Mahasiswa</h1>

    <?php
    // Membuat koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'tugas4');
    if (!$conn) {
        die('Gagal terhubung dengan database: ' . mysqli_connect_error());
    }

    // Menambah data ke database
    if (isset($_POST['tambah'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];

        $query = "INSERT INTO mahasiswa (Nama, NIM, Kelas) VALUES ('$nama', '$nim', '$kelas')";
        if (mysqli_query($conn, $query)) {
            echo '<p>Data berhasil ditambahkan.</p>';
        } else {
            echo '<p>Gagal menambahkan data: ' . mysqli_error($conn) . '</p>';
        }
    }

    // Mengubah data di database
    if (isset($_POST['ubah'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];

        $query = "UPDATE mahasiswa SET Nama='$nama', NIM='$nim', Kelas='$kelas' WHERE id='$id'";
        if (mysqli_query($conn, $query)) {
            echo '<p>Data berhasil diubah.</p>';
        } else {
            echo '<p>Gagal mengubah data: ' . mysqli_error($conn) . '</p>';
        }
    }

    // Menghapus data dari database
    if (isset($_POST['hapus'])) {
        $id = $_POST['id'];

        $query = "DELETE FROM mahasiswa WHERE id='$id'";
        if (mysqli_query($conn, $query)) {
            echo '<p>Data berhasil dihapus.</p>';
        } else {
            echo '<p>Gagal menghapus data: ' . mysqli_error($conn) . '</p>';
        }
    }

    // Menampilkan data dari database
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Nama</th><th>NIM</th><th>Kelas</th><th>Aksi</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['Nama'] . '</td>';
            echo '<td>' . $row['NIM'] . '</td>';
            echo '<td>' . $row['Kelas'] . '</td>';
            echo '<td>
					<form method="post">
						<input type="hidden" name="id" value="' . $row['id'] . '">
						<input type="submit" name="ubah" value="Ubah">
						<input type="submit" name="hapus" value="Hapus" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
					</form>
				</td>';
            echo "</tr>";
        }
        echo '</table>';
    } else {
        echo '<p>Tidak ada data.</p>';
    }

    // Menutup koneksi ke database
    mysqli_close($conn);
    ?>

    <h2>Tambah Data</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama"><br>
        <label>NIM:</label>
        <input type="text" name="nim"><br>
        <label>Kelas:</label>
        <input type="text" name="kelas"><br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>

</html>