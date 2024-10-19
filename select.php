<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'perpustakaan';

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}

$sql = 'SELECT no_buku, judul_buku, penulis, tahun_terbit, jenis_buku FROM koleksi_buku';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<ul>';
    while ($row = $result->fetch_assoc()) {
        echo '<li><strong>No Buku:</strong> ' . $row['no_buku'] . ', <strong>Judul:</strong> ' . $row['judul_buku'] . 
             ', <strong>Penulis:</strong> ' . $row['penulis'] . ', <strong>Tahun:</strong> ' . $row['tahun_terbit'] .
             ', <strong>Jenis:</strong> ' . $row['jenis_buku'] . '</li>';
    }
    echo '</ul>';
} else {
    echo 'Belum ada buku.';
}

$conn->close();
?>
