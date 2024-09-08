<?php
// File konfigurasi (config.php)
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Membuat koneksi
$koneksi = new mysqli($hostname, $username, $password, $dbname);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

