<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM games WHERE id = $id";
    $result = $conn->query($sql);
    $game = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $condition = $_POST['condition'];
    $description = $_POST['description'];

    $sql = "UPDATE games SET 
                title='$title', 
                genre='$genre', 
                price='$price', 
                `condition`='$condition', 
                description='$description' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Game updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $game['id']; ?>">
    Title: <input type="text" name="title" value="<?php echo $game['title']; ?>"><br>
    Genre: <input type="text" name="genre" value="<?php echo $game['genre']; ?>"><br>
    Price: <input type="number" step="0.01" name="price" value="<?php echo $game['price']; ?>"><br>
    Condition: 
    <select name="condition">
        <option value="new" <?php if ($game['condition'] == 'new') echo 'selected'; ?>>New</option>
        <option value="pre-owned" <?php if ($game['condition'] == 'pre-owned') echo 'selected'; ?>>Pre-Owned</option>
    </select><br>
    Description: <textarea name="description"><?php echo $game['description']; ?></textarea><br>
    <button type="submit">Update Game</button>
</form>
