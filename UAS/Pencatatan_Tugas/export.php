<?php
// Koneksi ke database
$host = 'localhost';
$db = 'list_tugas';
$user = 'root';
$pass = '';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
// print
$query = "SELECT * FROM tugas";
$stmt = $conn->prepare($query);
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Mengatur header HTTP
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="list_tugas.xls"');

// Buat file Excel
$file = fopen('php://output', 'w');

// Tulis header
$header = array('Matkul', 'Judul', 'Deskripsi', 'Deadline');
fputcsv($file, $header, "\t");

// Tulis data tugas
foreach ($tasks as $task) {
    $row = array($task['matkul'], $task['judul'], $task['deskripsi'], $task['deadline']);
    fputcsv($file, $row, "\t");
}

// Tutup file
fclose($file);
