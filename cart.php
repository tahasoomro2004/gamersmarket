<?php
session_start();

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add game to cart
if (isset($_GET['id'])) {
    $game_id = $_GET['id'];

    // Check if the game is already in the cart
    if (!in_array($game_id, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $game_id;
        echo "<p>Game added to cart successfully!</p>";
    } else {
        echo "<p>Game is already in the cart!</p>";
    }
}

// Display the cart
include 'db.php'; // Include the database connection

if (!empty($_SESSION['cart'])) {
    $ids = implode(",", $_SESSION['cart']);
    $sql = "SELECT * FROM games WHERE id IN ($ids)";
    $result = $conn->query($sql);

    echo "<h1>Your Cart</h1>";
    echo "<div class='cart-items'>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='cart-item'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>Price: $" . $row['price'] . "</p>";
            echo "<a href='remove_from_cart.php?id=" . $row['id'] . "'>Remove</a>";
            echo "</div>";
        }
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    echo "</div>";
} else {
    echo "<p>Your cart is empty.</p>";
}
?>
