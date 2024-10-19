<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'perpustakaan';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}

$no_buku = $_POST['no_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$jenis_buku = $_POST['jenis_buku'];

$sql = "INSERT INTO koleksi_buku (no_buku, judul_buku, penulis, tahun_terbit, jenis_buku) 
        VALUES ('$no_buku', '$judul_buku', '$penulis', '$tahun_terbit', '$jenis_buku')";

if ($conn->query($sql) === TRUE) {
    echo "<p>Data berhasil ditambahkan!</p>";

    echo "<a href='koleksi.php'><button>Lihat Koleksi Buku</button></a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
