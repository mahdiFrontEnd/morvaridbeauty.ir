<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login &amp; Register || Streamo - Media Streaming App Site Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('templates/streamo')}}/assets/images/favicon.ico">

    <!-- CSS
    ========================= -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('templates/streamo')}}/assets/css/bootstrap.min.css">

    <!-- Fonts CSS -->
    <link rel="stylesheet" href="{{url('templates/streamo')}}/assets/css/material-design-iconic-font.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('templates/streamo')}}/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('templates/streamo')}}/assets/css/style.css">

    <!-- Modernizer JS -->
    <script src="{{url('templates/streamo')}}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">

    <header class="header-area inner-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-7">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="{{url('templates/streamo')}}/assets/images/logo/logo.png" alt=""></a>
                    </div>
                    <!-- Logo -->
                </div>
                <div class="col-lg-9 col-5">
                    <div class="main-menu">
                        <nav class="main-navigation">
                            <ul>
                                <li class="active"><a href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                        <li><a href="index-3.html">Home Page 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="features.html">How it Works</a>
                                    <ul class="sub-menu">
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="support-solution.html">Support & Solution</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </li>
                                <li><a href="pricing-plan.html">Pricing</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="login-button">
                            <a class="login-btn border-r-5 tb-gradient-hover" href="login-and-register.html">Log in</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <!-- mobile-menu start -->
                    <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- mobile-menu end -->
                </div>
            </div>
        </div>

    </header>

    <!-- Breadcrumb -->
    <div class="breadcrumb-area bg-image" data-bgimage="{{url('templates/streamo')}}/assets/images/bg/breadcrumb-bg-01.jpg">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col text-center">
                        <h2>Login &amp; Register</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Login &amp; Register</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->


    <!-- Page Conttent -->
    <main class="page-content">

        <!-- login-register  -->
        <div class="register-page section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <!-- login-register-tab-list start -->
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <!-- login-register-tab-list end -->
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <div class="login-input-box">
                                                    <input type="text" name="email" placeholder="email  ">
                                                    <input type="password" name="password" placeholder="Password">
                                                </div>
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input name="remember" type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <div class="button-box">
                                                        <button class="login-btn btn" type="submit"><span>Login</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <div class="login-input-box">
                                                    <input type="text" name="user-name" placeholder="User Name">
                                                    <input type="password" name="user-password" placeholder="Password">
                                                    <input name="user-email" placeholder="Email" type="email">
                                                </div>
                                                <div class="button-box">
                                                    <button class="register-btn btn" type="submit"><span>Register</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// login-register End -->




    </main>
    <!--// Page Conttent -->


    <!-- Footer Area -->
    <footer class="footer-area">
        <div class="footer-top-one  footer-bg-image">
            <div class="container">
                <div class="row">
                    <div class="col-custom-4 mt--50">
                        <!-- footer-widget -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">About Streamo</h4>

                            <div class="footer-contet">
                                <p>Eiusmod tempor incididunt ut la abore et minim ven exerc itation ulla mco lboris naliquip ex ea comm.</p>
                                <ul class="fotter-socail">
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                            </div>

                        </div>
                        <!--// footer-widget -->
                    </div>

                    <div class="col-custom-3 mt--50">
                        <!-- footer-widget -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Company</h4>

                            <div class="footer-contet">
                                <ul class="footer-list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>

                        </div>
                        <!--// footer-widget -->
                    </div>

                    <div class="col-custom-3 mt--50">
                        <!-- footer-widget -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Services</h4>

                            <div class="footer-contet">
                                <ul class="footer-list">
                                    <li><a href="#">Video</a></li>
                                    <li><a href="#">Movie</a></li>
                                    <li><a href="#">Tv Series</a></li>
                                    <li><a href="#">Live</a></li>
                                </ul>
                            </div>

                        </div>
                        <!--// footer-widget -->
                    </div>

                    <div class="col-custom-3 mt--50">
                        <!-- footer-widget -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Contact</h4>

                            <div class="footer-contet">
                                <ul class="footer-contact-list">
                                    <li> <i class="zmdi zmdi-phone"></i> <a href="#">+022222222</a></li>
                                    <li> <i class="zmdi zmdi-home"></i> <a href="#">Queen meri street abc/23 Bangladesh</a></li>
                                    <li> <i class="zmdi zmdi-email"></i> <a href="#">demo@gmail.com</a></li>
                                </ul>
                            </div>

                        </div>
                        <!--// footer-widget -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p class="copyright-text">Copyright &copy; 2018 All right reserve</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="footer-bottom-list">
                            <li><a href="#">Help</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">support</a></li>
                            <li><a href="#">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--// Footer Area -->

</div>
<!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{url('templates/streamo')}}/assets/js/vendor/jquery-3.3.1.min.js"></script>
<!-- Popper JS -->
<script src="{{url('templates/streamo')}}/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{url('templates/streamo')}}/assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="{{url('templates/streamo')}}/assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="{{url('templates/streamo')}}/assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="{{url('templates/streamo')}}/assets/js/main.js"></script>


</body>

</html>
