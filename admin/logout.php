<?php
session_start();

// Menghapus semua data sesi
session_unset();
session_destroy();

// Redirect ke halaman login setelah logout
header("Location: ../index.php");
exit();
