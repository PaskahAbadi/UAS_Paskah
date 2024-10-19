// Fitur interaktif tambahan seperti alert atau validasi bisa ditambahkan
document.addEventListener('DOMContentLoaded', () => {
    // Menampilkan buku dari database
    fetch('select.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('book-collection').innerHTML = data;
        });
});
