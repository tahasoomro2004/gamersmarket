<?php
session_start();

if (isset($_GET['id'])) {
    $game_id = $_GET['id'];

    // Remove game from cart
    if (($key = array_search($game_id, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
    }
}

// Redirect back to the cart page
header("Location: cart.php");
?>
