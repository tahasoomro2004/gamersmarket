<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM games WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Game deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
<a href="read_games.php">Go Back</a>
