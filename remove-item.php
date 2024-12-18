<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "uas_bunga";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get item ID
$itemId = intval($_GET['id']); // Ensure the ID is an integer to prevent SQL injection

// Delete item from cart
$sql = "DELETE FROM keranjang WHERE id = $itemId";
if ($conn->query($sql) === TRUE) {
    // Redirect to cart
    header("Location: cart.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
