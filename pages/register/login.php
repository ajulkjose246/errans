<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sign In - Craft Startup Landing Page Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="../../assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />

    <style>
        .section {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }

        .account-login .login-form {
            padding: 30px 70px !important;
        }

        .account-login .form-group .form-control {
            height: 45px !important;
        }

        .account-login .button .btn {
            padding: 7px 24px !important;
            margin-right: 20px !important;
            width: 90% !important;
        }
        a{
            text-decoration: none !important;
        }
    </style>
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


    <!-- Start Account Sign In Area -->
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <form class="card login-form inner-content" method="post" action="#">
                        <div class="card-body">
                            <div class="title">
                                <h3>Sign In Now</h3>
                                <p>Sign in by entering the information below.</p>
                            </div>
                            <div class="input-head">
                                <div class="form-group input-group">
                                    <label><i class="lni lni-envelope"></i></label>
                                    <input class="form-control" type="email" id="usrEmail" placeholder="Enter your email" required>
                                </div>
                                <div class="form-group input-group">
                                    <label><i class="lni lni-lock-alt"></i></label>
                                    <input class="form-control" type="password" id="usrPwd" placeholder="Enter your password" required>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between bottom-content">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                    <label class="form-check-label">Remember me</label>
                                </div>
                                <a class="lost-pass" href="reset-password.html">Forgot password?</a>
                            </div>
                            <div class="button">
                                <div class="btn" id="logBtn" >Login</div>
                            </div>
                            <div class="or"><span>Or</span></div>
                            <div class="alt-option">
                                <span class="small-title">Sign in with your work email</span>
                                <a href="javascript:void(0)" class="option-button"><img src="../../assets/images/account-login/google.png" alt="#">Sign
                                    In With Google
                                </a>
                            </div>
                            <h4 class="create-account">Don't have an account? <a href="register.php">Sign Up Here</a>
                            </h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    require("../modal.php");
    ?>
    <!-- End Account Sign In Area -->



    <!-- ========================= JS here ========================= -->
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../assets/auth/firebase.js"></script>
    <script src="../../assets/js/register/register.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/tiny-slider.js"></script>
    <script src="../../assets/js/glightbox.min.js"></script>
    <script src="../../assets/js/count-up.min.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>