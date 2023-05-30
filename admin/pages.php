<?php
// Retrieve the URL parameter for section
$section = isset($_GET['section']) ? $_GET['section'] : 'home';

// Use a switch statement to determine which section to display
switch ($section) {
    case 'home':
        include('home.php');
        break;
    case 'produk':
        include('produk.php');
        break;
    case 'produkAdd':
        include('produkAdd.php');
        break;
    default:
        include('404.php');
        break;
}
