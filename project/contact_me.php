<?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil pesan dari tabel messages1
$sql = "SELECT id, message, created_at FROM messages1 ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
