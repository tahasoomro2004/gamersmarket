<?php
include 'db.php';

$sql = "SELECT * FROM games";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Price</th>
            <th>Condition</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['title'] . "</td>
                <td>" . $row['genre'] . "</td>
                <td>" . $row['price'] . "</td>
                <td>" . $row['condition'] . "</td>
                <td>" . $row['description'] . "</td>
                <td>
                    <a href='update_game.php?id=" . $row['id'] . "'>Edit</a> |
                    <a href='delete_game.php?id=" . $row['id'] . "'>Delete</a>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No games found.";
}
?>
