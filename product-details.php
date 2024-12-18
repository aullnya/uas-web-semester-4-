<script>
$(document).ready(function() {
    $('.add-to_cart .product-cart').click(function(e) {
        e.preventDefault();

        // Get product details
        var productId = 15; // Assuming you have product ID
        var productName = 'Lily White'; // Product Name
        var productPrice = 75000; // Product Price
        var productQty = 1; // Quantity, you can make it dynamic based on user input

        $.ajax({
            type: 'POST',
            url: 'cart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice,
                qty: productQty
            },
            success: function(response) {
                alert('Product added to cart!');
                // Optionally, update the cart item count or other UI elements here
            }
        });
    });
});
</script>


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

    <!-- CSS
	============================================ -->
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

</head>

<body>

    <script>
        $(document).ready(function() {
            $('.add-to_cart .product-cart').click(function(e) {
                e.preventDefault();

                // Get product details
                var productId = 1; // Assuming you have product ID
                var productName = 'Lily White'; // Product Name
                var productPrice = 75000; // Product Price
                var productQty = 1; // Quantity, you can make it dynamic based on user input

                $.ajax({
                    type: 'POST',
                    url: 'cart.php',
                    data: {
                        id: productId,
                        name: productName,
                        price: productPrice,
                        qty: productQty
                    },
                    success: function(response) {
                        alert('Product added to cart!');
                        // Optionally, update the cart item count or other UI elements here
                    }
                });
            });
        });
    </script>


    <!-- Header Area Start Here -->
    <header class="main-header-area">
        <!-- Main Header Area Start -->
        <div class="main-header header-sticky">
            <div class="container custom-area">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                        <div class="header-logo d-flex align-items-center">
                            <a href="index.html">
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
                                    <a href="#"><i class="fa fa-search"></i> </a>
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
        <!-- Main Header Area End -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper" id="mobileMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <div class="off-canvas-inner">
                    <div class="search-box-offcanvas">
                        <form>
                            <input type="text" placeholder="Search product...">
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.php">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php">Home Page 1</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
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
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <div class="offcanvas-widget-area">
                        <div class="switcher">
                            <div class="language">
                                <span class="switcher-title">Language: </span>
                                <div class="switcher-menu">
                                    <ul>
                                        <li><a href="#">Indonesia</a>
                                            <ul class="switcher-dropdown">
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Jepang</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="currency">
                                <span class="switcher-title">Currency: </span>
                                <div class="switcher-menu">
                                    <ul>
                                        <li><a href="#">Rp Rupiah</a>
                                            <ul class="switcher-dropdown">
                                                <li><a href="#">$ USD</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top-info-wrap text-left text-black">
                            <ul class="address-info">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="#">(1245) 2456 012</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="#">abcde@gmail.com</a>
                                </li>
                            </ul>
                            <div class="widget-social">
                                <a class="whatsapp-color-bg" title="WhatsApp" href="#"><i class="fa fa-whatsapp"></i></a>
                                <a class="instagram-color-bg" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-menu-wrapper" id="sideMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <ul class="menu-top-menu">
                            <li><a href="#">About Us</a></li>
                        </ul>
                        <p class="desc-content">LilysFlo adalah tempat yang menjual berbagai jenis bunga segar, tanaman hias, dan
                            rangkaian bunga untuk berbagai keperluan seperti hadiah,
                            dekorasi acara, dan pernikahan. Dengan beragam pilihan bunga, toko bunga
                            berperan penting dalam membantu orang mengekspresikan perasaan mereka melalui keindahan bunga.
                        </p>
                        <div class="switcher">
                            <div class="language">
                                <span class="switcher-title">Language: </span>
                                <div class="switcher-menu">
                                    <ul>
                                        <li><a href="#">Indonesia</a>
                                            <ul class="switcher-dropdown">
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Jepang</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="currency">
                                <span class="switcher-title">Currency: </span>
                                <div class="switcher-menu">
                                    <ul>
                                        <li><a href="#">Rp Rupiah</a>
                                            <ul class="switcher-dropdown">
                                                <li><a href="#">$ USD</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top-info-wrap text-left text-black">
                            <ul class="address-info">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="#">(+62) 856 1101 2122</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="#">infoabc@gamil.com</a>
                                </li>
                            </ul>
                            <div class="widget-social">
                                <a class="whatsapp-color-bg" title="WhatsApp" href="#"><i class="fa fa-whatsapp"></i></a>
                                <a class="instagram-color-bg" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </div>

                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
    </header>
    <!-- Header Area End Here -->
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Product Details</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Product Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Single Product Main Area Start -->
    <div class="single-product-main-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">
                    <div class="product-details-img">
                        <div class="single-product-img swiper-container gallery-top popup-gallery">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="w-100" href="assets/images/product/large-size/7.jpg">
                                        <img class="w-100" src="assets/images/product/large-size/7.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="w-100" href="assets/images/product/large-size/bunga8.jpg">
                                        <img class="w-100" src="assets/images/product/large-size/bunga8.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="w-100" href="assets/images/product/large-size/6.jpg">
                                        <img class="w-100" src="assets/images/product/large-size/6.jpg" alt="Product">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-custom">
                    <div class="product-summery position-relative">
                        <div class="product-head mb-3">
                            <h2 class="product-title">Lily White</h2>
                        </div>
                        <div class="price-box mb-2">
                            <span class="regular-price">75.000</span>
                            <span class="old-price"><del>85.000</del></span>
                        </div>
                        <div class="product-rating mb-3">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="sku mb-3">
                            <span>Tersedia: 12345</span>
                        </div>
                        <p class="desc-content mb-5">Bunga Lily adalah salah satu jenis bunga yang populer karena keindahan dan aromanya yang khas. Bunga ini memiliki kelopak yang besar dan elegan dengan variasi warna yang beragam seperti putih, kuning, merah, oranye, dan merah muda.
                            Lily sering digunakan dalam rangkaian bunga untuk berbagai acara seperti pernikahan, ulang tahun, dan pemakaman, karena melambangkan kemurnian, kesucian, dan transisi. Selain itu, bunga Lily juga dikenal mudah dirawat,
                            menjadikannya pilihan favorit untuk tanaman hias di rumah dan taman.</p>
                        <div class="quantity-with_btn mb-5">

                            <div class="add-to_cart">
                                <div class="add-to_cart">
                                    <a class="btn product-cart button-icon flosun-button dark-btn" href="cart.php">Add to cart</a>
                                    <!-- Tombol lain atau elemen lain sesuai kebutuhan -->
                                </div>

                                <a class="btn flosun-button secondary-btn secondary-border rounded-0" href="#">Add to wishlist</a>
                            </div>
                        </div>
                        <div class="social-share mb-4">
                            <span>Share :</span>
                            <a href="#"><i class="fa fa-whatsapp-square whatsapp-color"></i></a>
                            <a href="#"><i class="fa fa-instagram-square instagram-color"></i></a>
                            <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                        </div>

                        <div class="payment">
                            <a href="#"><img class="border" src="assets/images/payment/payment-icon.png" alt="Payment"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-no-text">
                <div class="col-lg-12 col-custom">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Deskripsi Produk</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab" href="#connect-3" role="tab" aria-selected="false">Kebijakan Pengiriman</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="desc-content">
                                <p class="mb-3">Hadirkan sentuhan elegan dan alami ke dalam ruangan Anda dengan produk eksklusif kami, Bunga Lily Elegan dengan Vas.
                                    Bunga lily, yang dikenal dengan keindahan dan keharumannya, merupakan pilihan sempurna untuk mempercantik ruangan,
                                    memberikan sentuhan romantis, atau sebagai hadiah istimewa untuk orang tercinta. </p>
                                <p>Detail Produk :</p>
                                <p>BUNGA LILY</p>
                                <p>1. Varietas : Lily Oriental</p>
                                <p>2. Warna : Putih</p>
                                <p>3. Jumlah: 3 tangkai bunga lily segar</p>
                                <p>4. Kualitas: Dipilih dengan hati-hati untuk memastikan bunga dalam kondisi terbaik,
                                    dengan kelopak yang mekar sempurna dan batang yang kokoh.</p>
                                <p>
                                    Tambahkan keindahan dan keharuman alami ke dalam hidup Anda dengan Bunga Lily Elegan dengan Vas.
                                    Pesan sekarang dan nikmati pesona bunga lily yang abadi!
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="shipping-policy">
                                <h4 class="title-3 mb-4">Kebijakan Pengiriman </h4>
                                <ul class="policy-list mb-2">
                                    <li>1-2 hari kerja (Sabtu dan Minggu)</li>
                                    <li><a href="#">Garansi Uang Kembali</a></li>
                                    <li>Bunga fresh dipetik langsung dari kebun</li>
                                    <li>Bunga dijamin masih fresh sampai tujuan</li>
                                    <li>FREE ONGKIR min pembelian 50 bunga</li>
                                </ul>
                                <p class="desc-content mb-2">Bunga pada toko kami dipetik langsung dari kebun yang kami olah sendiri.</p>
                                <p class="desc-content mb-2">Toko kami memberikan garansi 100% apabila barang yang anda terima memenuhi kategori berikut :</p>
                                <p> 1. Bunga Layu </p>
                                <p> 2. Bunga yang dikirimkan tidak sesuai permintaan </p>
                                <p> 3. Ada kerusakan yang terjadi terhadap bunganya. </p>
                                <p class="desc-content mb-2">WAJIB ADA VIDEO UNBOXING!!!!</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product Main Area End -->
    <!--Product Area Start-->
    <div class="product-area mt-text-3">
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

        <!-- Scroll to Top Start -->
        <a class="scroll-to-top" href="#">
            <i class="lnr lnr-arrow-up"></i>
        </a>
        <!-- Scroll to Top End -->

        <!-- JS
============================================ -->


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
        <!-- Ajaxchimpt js -->
        <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
        <!-- Jquery Ui js -->
        <script src="assets/js/plugins/jquery-ui.min.js"></script>
        <!-- Jquery Countdown js -->
        <script src="assets/js/plugins/jquery.countdown.min.js"></script>
        <!-- jquery magnific popup js -->
        <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

        <!-- Main JS -->
        <script src="assets/js/main.js"></script>


</body>



</html>