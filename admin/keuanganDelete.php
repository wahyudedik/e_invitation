<?php
include "config/config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan sanitasi dan validasi data sebelum menggunakannya dalam kueri SQL

    $sql = "DELETE FROM laporan_keuangan WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Data produk berhasil dihapus.";
        header("Location: index.php?section=keuangan");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
