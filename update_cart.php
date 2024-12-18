<?php
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

// Query untuk mendapatkan data produk dari tabel
$sql = "SELECT id, Produk, Harga, Total FROM keranjang"; // Sesuaikan nama tabel dan kolom sesuai database Anda
$result = $conn->query($sql);
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LilysFlo</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo L.jpg">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/linearicons.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            function updateCartItem(productId, quantity) {
                $.ajax({
                    url: 'index.php',
                    type: 'POST',
                    data: {
                        id: productId,
                        quantity: quantity
                    },
                    success: function(response) {
                        location.reload();
                    }
                });
            }

            $('.qtybutton').on('click', function() {
                var $button = $(this);
                var oldValue = $button.closest('.quantity').find('.cart-plus-minus-box').val();
                var newVal;
                var productId = $button.closest('tr').attr('data-id');

                if ($button.hasClass('inc')) {
                    newVal = parseFloat(oldValue) + 1;
                } else {
                    if (oldValue > 1) {
                        newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 1;
                    }
                }
                $button.closest('.quantity').find('.cart-plus-minus-box').val(newVal);
                updateCartItem(productId, newVal);
            });

            $('.pro-remove a').on('click', function(e) {
                e.preventDefault();
                var productId = $(this).closest('tr').attr('data-id');
                $.ajax({
                    url: 'index.php', // Ganti dengan file PHP untuk menghapus item dari keranjang
                    type: 'POST',
                    data: {
                        delete_id: productId
                    },
                    success: function(response) {
                        location.reload();
                    }
                });
            });
        });
    </script>
</head>

<body>
    <!-- Header Area Start Here -->
    <header class="main-header-area">
        <!-- Main Header Area Start -->
        <div class="main-header header-sticky">
            <div class="container custom-area">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                        <div class="header-logo d-flex align-items-center">
                            <a href="index.php">
                                <img class="img-full" src="assets/images/logo/lili.png" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <span class="menu-text"> Home</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-hover">
                                        <li><a href="index.php">Home Page - 1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="active" href="#">
                                        <span class="menu-text">Shop</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a href="product-details.php">Product</a></li>
                                                <li><a href="product-details.php">Deskripsi Product</a></li>
                                            </ul>
                                      
                                   
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-text"> Blog</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-hover">
                                        <li><a href="#">Terbaru</a></li>
                                        <li><a href="#">Terlaris</a></li>
                                        <li><a href="#">Kategori</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-text"> Pages</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-hover">
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Register</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-text"> About Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-text">Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 col-custom">
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="minicart-wrap">
                                    <a href="#" class="minicart-btn toolbar-btn">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="cart-item_count"> </span>
                                    </a>
                                    <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                        <div class="cart-items">
                                            <!-- Cart items will be dynamically injected here -->
                                        </div>
                                        <div class="cart-price-total d-flex justify-content-between">
                                            <h5>Total :</h5>
                                            <h5 class="total-price"> </h5>
                                        </div>
                                        <div class="cart-links d-flex justify-content-between">
                                            <a class="btn product-cart button-icon flosun-button dark-btn" href="cart.php">View cart</a>
                                            <a class="btn flosun-button secondary-btn rounded-0" href="checkout.php">Checkout</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidemenu-wrap">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-search">
                                        <li>
                                            <form action="#">
                                                <input name="search" id="search" placeholder="Search" type="text">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li class="account-menu-wrap d-none d-lg-flex">
                                    <a href="#" class="off-canvas-menu-btn">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                                <li class="mobile-menu-btn d-lg-none">
                                    <a class="off-canvas-btn" href="#">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End Here -->

    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Update Cart</h3>
                        <ul>
                            <li><a href="cart.php">Back</a></li>
                            <li>Update Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->

    <!-- Cart Main Wrapper Start -->
    <div class="cart-main-wrapper mt-no-text">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody id="cart-items">
                                <?php
                                $subtotal = 0;
                                while ($row = mysqli_fetch_assoc($result)) :
                                    $subtotal += $row["Total"];
                                ?>
                                    <tr data-id="<?= $row['id']; ?>">
                                        <td class="pro-title"><a href="#"><?= $row["Produk"]; ?></a></td>
                                        <td class="pro-price"><span><?= $row["Harga"]; ?></span></td>
                                        <td class="pro-quantity">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span><?= $row["Total"]; ?></span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        
                        <div class="cart-update mt-sm-16">
                            <a href="cart.php" class="btn flosun-button primary-btn rounded-0 black-btn">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Main Wrapper End -->

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id']) && isset($_POST['quantity'])) {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];

        // Ambil harga satuan
        $sql = "SELECT Harga FROM keranjang WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $harga = $row['Harga'];

        // Hitung total baru
        $total = $harga * $quantity;

        // Update kuantitas dan total di database
        $sql = "UPDATE keranjang SET Total = $total WHERE id = $id";
        $conn->query($sql);
    }

    // Skrip untuk menghapus item dari keranjang
    if (isset($_POST['delete_id'])) {
        $delete_id = $_POST['delete_id'];
        $sql_delete = "DELETE FROM keranjang WHERE id = $delete_id";
        $conn->query($sql_delete);
    }
}

// Tutup koneksi
$conn->close();
?>
