<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $message = htmlspecialchars($_POST['message']);

    $stmt = $conn->prepare("UPDATE messages1 SET message = ? WHERE id = ?");
    $stmt->bind_param("si", $message, $id);

    if ($stmt->execute()) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
