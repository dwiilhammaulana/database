<?php
$host = 'mysql.railway.internal'; // Ganti dengan host server cloud Anda
$user = 'root'; // Username MySQL Anda
$pass = 'iVpdsJqXxuTccawSMCzWpJfpAOTQSfDm'; // Password MySQL Anda
$db   = 'railway';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
