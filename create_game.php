<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $condition = $_POST['condition'];
    $description = $_POST['description'];

    $sql = "INSERT INTO games (title, genre, price, `condition`, description)
            VALUES ('$title', '$genre', '$price', '$condition', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New game added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="">
    Title: <input type="text" name="title" required><br>
    Genre: <input type="text" name="genre"><br>
    Price: <input type="number" step="0.01" name="price" required><br>
    Condition: 
    <select name="condition">
        <option value="new">New</option>
        <option value="pre-owned">Pre-Owned</option>
    </select><br>
    Description: <textarea name="description"></textarea><br>
    <button type="submit">Add Game</button>
</form>
