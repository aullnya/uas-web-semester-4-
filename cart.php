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
$sql = "SELECT Produk, Harga, Qty, Total FROM keranjang"; // Sesuaikan nama tabel dan kolom sesuai database Anda
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="assets/css/vendor/linearicons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- jQuery Migrate JS -->
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- Ajaxchimp JS -->
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <!-- jQuery UI JS -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <!-- jQuery Countdown JS -->
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <!-- jQuery Magnific Popup JS -->
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
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
                                        <li><a href="cart.php">Keranjang</a></li>
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
                        <h3 class="title-3">Shopping Cart</h3>
                        <ul>
                            <li><a href="product-details.php">Back</a></li>
                            <li>Shopping Cart</li>
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
                                <!-- Cart items will be dynamically injected here -->

                                <?php
                                $subtotal = 0;
                                while ($row = mysqli_fetch_assoc($result)) :
                                    $subtotal += $row["Total"];
                                ?>
                                    <tr>
                                        <td class="pro-title"><a href="#"><?= $row["Produk"]; ?> </a></td>
                                        <td class="pro-price"><span><?= $row["Harga"]; ?> </span></td>
                                        <td class="pro-quantity"><span><?= $row["Qty"]; ?></span></td>
                                        <td class="pro-subtotal"><span><?= $row["Total"]; ?> </span></td>
                                        <td class="pro-remove"><a href="remove-item.php"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        <div class="apply-coupon-wrapper">
                            <form action="#" method="post" class="d-block d-md-flex">
                                <input type="text" placeholder="Enter Your Coupon Code" required>
                                <button class="btn flosun-button primary-btn rounded-0 black-btn" type="submit">Apply Coupon</button>
                            </form>
                        </div>
                        <div class="cart-update mt-sm-16">
                            <a href="koneksi.php" class="btn flosun-button primary-btn rounded-0 black-btn">Update Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="cart-calculator-wrapper">
                    <div class="cart-calculate-items">
                        <h3>Cart Totals</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Sub Total</td>
                                    <td><?= $subtotal; ?></td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td>5000</td>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <td class="total-amount"><?= $subtotal - 5000; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <a href="checkout.php" class="btn flosun-button primary-btn rounded-0 black-btn w-100">Proceed To Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Main Wrapper End -->

    <!--Footer Area Start-->
    <footer class="footer-area">
        <div class="footer-widget-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-custom">
                        <div class="single-footer-widget m-0">
                            <div class="footer-logo">
                                <a href="index.php">
                                    <img src="assets/images/logo/LilysFlo3.png" alt="Logo Image">
                                </a>
                            </div>
                            <p class="desc-content">Lorem Khaled Ipsum is a major key to success. To be successful you’ve got to work hard you’ve got to make it.</p>
                            <div class="social-links">
                                <ul class="d-flex">
                                    <li>
                                        <a class="rounded-circle" href="#" title="WhatsApp">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Instagram">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Information</h2>
                            <ul class="widget-list">
                                <li><a href="#">Our Company</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Why We?</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Quicklink</h2>
                            <ul class="widget-list">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Cart</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Support</h2>
                            <ul class="widget-list">
                                <li><a href="#">Online Support</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">See Information</h2>
                            <div class="widget-body">
                                <address>Jl. Manaaja, Semarang.<br>Phone: (+62) 852 2456 1012<br>Email: infoabc@gmail.com</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container custom-area">
                <div class="row">
                    <div class="col-12 text-center col-custom">
                        <div class="copyright-content">
                            <p>Copyright © 2024 | <strong>LilysFlo</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer Area End-->

</body>

</html>

<?php
// Tutup koneksi
$conn->close();
?>