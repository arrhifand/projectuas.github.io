<?php
include 'config.php';

$sql = "SELECT id, message, created_at FROM messages1";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $conn->error;
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='message-item'>";
        echo "<p>" . htmlspecialchars($row['message']) . "</p>";
        echo "<small>Sent on " . $row['created_at'] . "</small>";
        echo "<div class='actions'>";
        echo "<div class='delete_button'><a href='php/edit_message.php?id=" . $row['id'] . "'>Edit</a> | ";
        echo "<a href='php/delete_message.php?id=" . $row['id'] . "'>Delete</a>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "<p>No messages found.</p>";
}

$conn->close();
?>