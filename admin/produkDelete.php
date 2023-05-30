<?php
// Mengambil nilai dari form input
$produk_id = $_GET['id'];

// Menghubungkan ke database
include "config/config.php";

// Memeriksa apakah data produk dengan ID yang diberikan ada di database
$sql = "SELECT * FROM produk_themes WHERE id = $produk_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menghapus data produk
    $sql = "DELETE FROM produk_themes WHERE id = $produk_id";
    if ($conn->query($sql) === TRUE) {
        echo "Data produk berhasil dihapus.";
        header("Location: index.php?section=produk");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Data produk tidak ditemukan.";
}

$conn->close();
