<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$user = $_SESSION['user'];
$userid = $user['uid'];
if ($user == null) {
    echo ("<script>location.href='index.php';</script>");
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Contact Us - Craft Startup Landing Page Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="home.php">
                                <h5 style="color: white;">ERRANS</h5>
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="home.php" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about-us.html" aria-label="Toggle navigation">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                        <ul class="sub-menu collapse" id="submenu-1-1">
                                            <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                            <li class="nav-item"><a href="pricing.html">Our Pricing</a></li>
                                            <li class="nav-item"><a href="signin.html">Sign In</a></li>
                                            <li class="nav-item"><a href="signup.html">Sign Up</a></li>
                                            <li class="nav-item"><a href="reset-password.html">Reset Password</a>
                                            <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                            <li class="nav-item"><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="blog-grid.html">Blog Grid</a>
                                            </li>
                                            <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" class="active" aria-label="Toggle navigation">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button">
                                <?php if ($user == null) { ?>
                                    <a href="./pages/register/login.php" class="btn">Get started</a>
                                <?php } else { ?>
                                    <a href="./pages/register/login.php" class="btn" id="logoutBtn">Log Out</a>
                                <?php } ?>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Ask a public question</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="home.php">Home</a></li>
                            <li>Question</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact Area -->
    <div class="contact-us section">
        <div class="container" style="padding-left: 15%;padding-right: 15%;">
            <div class="row">
                <div class="col-12">
                    <div class="contact-form">
                        <h3 class="form-title" style="text-align: center;">Writing a good question</h3>
                        <form class="form" method="post" action="#">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Title</label>
                                        <input name="quesTitle" type="text" placeholder="Title" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">What are the details of your problem?</label>
                                        <textarea class="form-control" name="quesDetails" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Tags</label>
                                        <input name="quesTags" type="text" placeholder="e.g : c++,html,php" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button" style="text-align: center;">
                                        <!-- <button type="submit" class="btn ">Upload your question</button> -->
                                        <input type="submit" class="btn " name="quesBtn" value="Upload your question">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->


    <!-- Start Footer Area -->
    <footer class="footer section">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-about">
                                <div class="logo">
                                    <a href="home.php">
                                        <h5 style="color: white;">ERRANS</h5>
                                    </a>
                                </div>
                                <p>Making the world a better place through constructing elegant hierarchies.</p>
                                <h4 class="social-title">Follow Us On:</h4>
                                <ul class="social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-pinterest"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Solutions</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Marketing</a></li>
                                    <li><a href="javascript:void(0)">Analytics</a></li>
                                    <li><a href="javascript:void(0)">Commerce</a></li>
                                    <li><a href="javascript:void(0)">Insights</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Support</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Pricing</a></li>
                                    <li><a href="javascript:void(0)">Documentation</a></li>
                                    <li><a href="javascript:void(0)">Guides</a></li>
                                    <li><a href="javascript:void(0)">API Status</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer newsletter">
                                <h3>Subscribe</h3>
                                <p>Subscribe to our newsletter for the latest updates</p>
                                <form action="contact.html#" method="get" target="_blank" class="newsletter-form">
                                    <input name="EMAIL" placeholder="Email address" required="required" type="email">
                                    <div class="button">
                                        <button class="sub-btn"><i class="lni lni-envelope"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Start Copyright Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <p class="copyright-text">© 2023 CryptoLand - All Rights Reserved</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <p class="copyright-owner">Designed and Developed by <a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require("./pages/modal.php");
        require("./assets/auth/connection.php");
        ?>
        <!-- End Copyright Area -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="contact.html#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>


    <?php
    if (isset($_POST['quesBtn'])) {
        $quesTitle = $_POST['quesTitle'];
        $quesDetails = $_POST['quesDetails'];
        $quesTags = $_POST['quesTags'];
        $uid = $user['uid'];

        $quesTitle = mysqli_real_escape_string($con, $quesTitle);
        $quesDetails = mysqli_real_escape_string($con, $quesDetails);
        $quesTags = mysqli_real_escape_string($con, $quesTags);
        // $con = mysqli_connect("localhost", "root", "", "db_errans");
        $sql = "INSERT INTO `tbl_questions`(`usr_id`, `q_title`, `q_details`, `q_tags`) VALUES ('$uid','$quesTitle','$quesDetails','$quesTags')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo ("<script>modal_message(1,'Question added Success','home.php');</script>");
        }
    }
    ?>


    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>