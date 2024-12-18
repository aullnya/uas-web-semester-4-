<?php
session_start();
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: cart.php");
    exit;
}

session_start();

// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "uas_bunga";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari POST request (misalnya, ID produk yang akan ditambahkan)
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Query untuk mendapatkan detail produk berdasarkan ID (misalnya, harga, nama produk, dll.)
    $sql = "SELECT Produk, Harga FROM produk WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Mengambil nilai produk dari hasil query
        $product_name = $row['Produk'];
        $product_price = $row['Harga'];

        // Menyimpan data produk ke dalam session keranjang belanja
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Menambahkan produk ke dalam session keranjang belanja
        $cart_item = array(
            'id' => $product_id,
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1, // Default quantity set to 1
            'total' => $product_price // Total price initially set to product price
        );

        // Cek apakah produk sudah ada di keranjang
        $index = -1;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['id'] == $product_id) {
                    $index = $key;
                    break;
                }
            }
        }

        if ($index == -1) {
            // Produk belum ada di keranjang, tambahkan sebagai item baru
            array_push($_SESSION['cart'], $cart_item);
        } else {
            // Produk sudah ada di keranjang, tambahkan jumlahnya
            $_SESSION['cart'][$index]['quantity']++;
            $_SESSION['cart'][$index]['total'] += $product_price;
        }
    }

    // Redirect kembali ke halaman produk setelah menambahkan ke keranjang
    header("Location: product-details.php?id=$product_id");
    exit();
}

// Tutup koneksi
$conn->close();
?>


$qty = 1;
if (isset($_POST['qty'])) {
    $qty = max($_POST['qty'],1);
}

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$id = $_GET['id'];
if (!isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id] = $qty;
} else {
    $_SESSION['cart'][$id] += $qty;
}

header("Location: cart.php");
exit;