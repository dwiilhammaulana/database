<?php
$host = 'localhost'; // Ganti dengan host server cloud Anda
$user = 'root'; // Username MySQL Anda
$pass = ''; // Password MySQL Anda
$db   = 'coba_cloud';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
