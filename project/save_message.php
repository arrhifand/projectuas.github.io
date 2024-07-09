<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];

    // SQL untuk menyimpan pesan
    $sql = "INSERT INTO messages1 (message) VALUES (?)";

    // Mempersiapkan statement
    if ($stmt = $conn->prepare($sql)) {
        // Mengikat parameter
        $stmt->bind_param("s", $message);

        // Menjalankan statement
        if ($stmt->execute()) {
            echo "Message already send!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Menutup statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
?>