<?php
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT message FROM messages1 WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($message);
$stmt->fetch();

echo "<form action='update_message.php' method='POST'>";
echo "<input type='hidden' name='id' value='" . $id . "'>";
echo "<textarea name='message'>" . htmlspecialchars($message) . "</textarea>";
echo "<button type='submit'>Update</button>";
echo "</form>";

$stmt->close();
$conn->close();
?>
