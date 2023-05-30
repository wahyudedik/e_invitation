<?php
// Mengambil nilai dari form input
$produk_id = $_POST['produk_id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];

// Menghubungkan ke database
include "config/config.php";

// Memeriksa apakah data produk dengan ID yang diberikan ada di database
$sql = "SELECT * FROM produk_themes WHERE produk_id = $produk_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mengupdate data produk
    $sql = "UPDATE produk_themes SET judul = '$judul', deskripsi = '$deskripsi', kategori = '$kategori', updated_at = NOW() WHERE produk_id = $produk_id";
    if ($conn->query($sql) === TRUE) {
        echo "Data produk berhasil diperbarui.";
        header("Location: index.php?section=produk");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Data produk tidak ditemukan.";
}

$conn->close();
