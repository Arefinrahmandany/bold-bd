<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bold</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/bold_logo.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('css/shortcode/shortcodes.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


    <!-- Modernizr JS -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

<body>

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                                <div class="logo">
                                    <a href="{{ route('Home.index') }}"><img src="images/logo/bold_logo.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="{{ route('Home.index') }}">Home</a></li>
                                        <li class="drop"><a href="#">women</a>
                                            <ul class="dropdown mega_dropdown">
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Watch</a>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.html">Women Casual Watches</a></li>
                                                        <li><a href="cart.html">Women Fashion Watches</a></li>
                                                        <li><a href="checkout.html">Women Business Watches</a></li>
                                                        <li><a href="wishlist.html">Women Sports Watches</a></li>
                                                        <li><a href="wishlist.html">Women Watches Accessories</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->

                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Comming Soon</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">men</a>
                                            <ul class="dropdown mega_dropdown">
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Watch</a>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.html">Men Casual Watches</a></li>
                                                        <li><a href="cart.html">Men Fashion Watches</a></li>
                                                        <li><a href="checkout.html">Men Business Watches</a></li>
                                                        <li><a href="wishlist.html">Men Sports Watches</a></li>
                                                        <li><a href="wishlist.html">Men Watches Accessories</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Comming Soon</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->

                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">Product</a>
                                            <ul class="dropdown">
                                                <li><a href="product-grid.html">Women's &amp; Girls' Fashion</a></li>
                                                <li><a href="product-details.html">Health &amp; Beauty</a></li>
                                                <li><a href="product-details.html">Watches, Bags, Jewellery</a></li>
                                                <li><a href="product-details.html">Men's &amp; Boys' Fashion</a></li>
                                                <li><a href="product-details.html">Mother &amp; Baby</a></li>
                                                <li><a href="product-details.html">Electronics Devices</a></li>
                                                <li><a href="product-details.html">TV &amp; Home Appliances</a></li>
                                                <li><a href="product-details.html">Electronic Accessories</a></li>
                                                <li><a href="product-details.html">Groceries</a></li>
                                                <li><a href="product-details.html">Home &amp; Lifestyle</a></li>
                                                <li><a href="product-details.html">Sports &amp; Outdoors</a></li>
                                                <li><a href="product-details.html">Automotive &amp; Motorbike</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="cart.html">Cart page</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="product-grid.html">product grid</a></li>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                    <div class="header__account">
                                        <a href="{{ route('Login.index') }}"><i class="icon-user icons"></i></a>
                                    </div>

                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="#"><span class="htc__qua">2</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->




        @section('main-content')



            @show









        <!-- Start Footer Area -->
        <footer id="htc__footer">
            <!-- Start Footer Widget -->
            <div class="footer__container bg__cat--1">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer">
                                <h2 class="title__line--2">ABOUT US</h2>
                                <div class="ft__details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                                    <div class="ft__social__link">
                                        <ul class="social__link">
                                            <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                            <div class="footer">
                                <h2 class="title__line--2">information</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy & Policy</a></li>
                                        <li><a href="#">Terms  & Condition</a></li>
                                        <li><a href="#">Manufactures</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">my account</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="">My Account</a></li>
                                        <li><a href="cart.html">My Cart</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">Our service</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="cart.html">My Cart</a></li>
                                        <li><a href="{{ route('dashboard.page') }}">Login</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">NEWSLETTER </h2>
                                <div class="ft__inner">
                                    <div class="news__input">
                                        <input type="text" placeholder="Your Mail*">
                                        <div class="send__btn">
                                            <a class="fr__btn" href="#">Send Mail</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                    </div>
                </div>
            </div>
            <!-- End Footer Widget -->
            <!-- Start Copyright Area -->
            <div class="htc__copyright bg__cat--5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright__inner">
                                <p>Copyright© <a href="{{ url('https://www.linkedin.com/in/md-arefin-rahman-939136154/') }}"></a> By Arefin</p>
                                <a href="#"><img src="images/others/shape/paypol.png" alt="payment images"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </footer>
        <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap framework js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Waypoints.min.js. -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
