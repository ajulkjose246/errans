<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$user = $_SESSION['user'];
$userid = $user['uid'];
if ($user == null) {
    echo ("<script>location.href='index.php';</script>");
}
$qid = $_GET['id'];
require("./assets/auth/connection.php");
$sql = "SELECT * FROM `tbl_questions` WHERE `q_id` = $qid";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$ansData = "SELECT * FROM `tbl_answers` WHERE `qus_id` =$qid";
$resultAns = mysqli_query($con, $ansData);
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Blog Single - Craft Startup Landing Page Template.</title>
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
    <style>
        .breadcrumbs .breadcrumb-nav li:after {
            content: "" !important;
        }

        ol {
            list-style-type: style;
            ;
        }
    </style>
</head>

<body>

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
                                        <a href="#" aria-label="Toggle navigation">Home</a>
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
                                        <a class="dd-menu active collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="blog-grid.html">Blog Grid</a>
                                            </li>
                                            <li class="nav-item active"><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" aria-label="Toggle navigation">Contact</a>
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

                        <h1 class="page-title"><?= $row['q_title'] ?></h1>
                        <div class="breadcrumb-nav ">
                            <p style="text-align: center;">
                            <ul class="meta-info" style="list-style-type: circle;">
                                <li>
                                    <div><?= $row['q_views'] ?> Views</div>
                                </li>
                                <li>
                                    <div><?= $row['q_answers'] ?> answer</div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">@<?= $row['usr_id'] ?></a>
                                </li>
                            </ul>
                            </p>
                            <!-- <li>Blog Single Sidebar</li> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Blog Singel Area -->
    <section class="section blog-single">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-inner">
                        <div class="post-details">
                            <div class="main-content-head ">

                                <div class="meta-information qList">
                                    <h2 class="post-title"><?= $row['q_details'] ?></h2>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-6 mb-3">
                    <h5>Answers</h5>
                </div>
                <div class="col-12">
                    <div class="single-inner">
                        <div class="post-details">
                            <div class="main-content-head ">
                                <?php
                                // $timestamp = ;
                                while ($ansRow = mysqli_fetch_array($resultAns)) {
                                    $createdOn = date("M d , Y \a\\t H:i", strtotime($ansRow['createdOn']));
                                ?>
                                    <div class="meta-information qList">
                                        <h2 class="post-title"><?= $ansRow['ans_content'] ?></h2>
                                        <ul class="meta-info">
                                            <li>
                                                <a  class="fw-bold" href="javascript:void(0)">@<?= $row['usr_id'] ?></a>
                                            </li>
                                            <li>
                                                <div class="fw-bold"><?= $createdOn ?></div>
                                            </li>
                                        </ul>
                                        <!-- End Meta Info -->
                                    </div>
                                <?php }
                                if (mysqli_num_rows($resultAns) == 0) { ?>
                                    <div class="meta-information qList">
                                        <h2 class="post-title">No answers </h2>

                                        <!-- End Meta Info -->
                                    </div>
                                <?php }
                                ?>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-6 mb-3">
                    <h5>Your Answer</h5>
                </div>
                <div class="col-12">
                    <div class="single-inner">
                        <div class="post-details">
                            <form action="#" method="post">
                                <div class="main-content-head">
                                    <div class="meta-information qList">
                                        <textarea name="qesAns" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="button" style="text-align: center;">
                                        <!-- <button type="submit" class="btn ">Upload your question</button> -->
                                        <input type="submit" class="btn " name="ansBtn" value="Post your answer">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Singel Area -->

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
                                <form action="blog-single.html#" method="get" target="_blank" class="newsletter-form">
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
    <a href="home.php#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>


    <?php
    if (isset($_POST['ansBtn'])) {
        $qesAns = $_POST['qesAns'];
        $qus_id = $qid;
        $uid = $userid;
        $qesAns = mysqli_real_escape_string($con, $qesAns);
        echo ("<script>alert('$qesAns')</script>");

        // $con = mysqli_connect("localhost", "root", "", "db_errans");
        $sql = "INSERT INTO `tbl_answers`(`usr_id`, `qus_id`, `ans_content`) VALUES ('$uid','$qus_id','$qesAns')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo ("<script>modal_message(1,'Answer added Success','./questonDetails.php?id=$qus_id');</script>");
        }
    }
    ?>

    <!-- ========================= JS here ========================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.0/countUp.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/5fg3bicgyyo6prrbtz0do65vh5fmmzw2b1wb9ewih5m5e1vl/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="assets/js/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <script type="module" src="./assets/auth/firebase.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            menubar: false, // Set to false to hide the top menu bar
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',

            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
            formats: {
                code: {
                    inline: 'code',
                    block: 'pre',
                    styles: {
                        fontFamily: 'monospace',

                    }
                }
            },
        });
    </script>
</body>

</html>