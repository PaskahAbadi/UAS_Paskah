<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Buku Perpustakaan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Koleksi Buku Perpustakaan</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="koleksi.php">Koleksi Buku</a></li>
                <li><a href="index.html#addbook">Tambah Buku</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="collection">
            <h2>Daftar Koleksi Buku</h2>
            <div id="book-collection">
                <?php
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'perpustakaan';

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
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Paskah Abadi. All rights reserved.</p>
    </footer>
</body>
</html>
