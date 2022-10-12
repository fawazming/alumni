<!DOCTYPE html>
<html lang="en">
<!-- todo: Create a Class Page -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pride of Faith Academy, Sagamu || About Us</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- favicon -->
    <link href="<?=base_url('front/img/favicon.ico')?>" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('front/css/bootstrap.min.css')?>" type="text/css" rel="stylesheet">
    <!-- Slider -->
    <link href="<?=base_url('front/css/tiny-slider.css')?>" rel="stylesheet">
    <!-- Tobii -->
    <link href="<?=base_url('front/css/tobii.min.css')?>" rel="stylesheet" type="text/css">
    <!--Material Icon -->
    <!-- <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
    <!-- Custom  Css -->
    <link href="<?=base_url('front/css/style.min.css')?>" rel="stylesheet" type="text/css">
    <style></style>
    <style type="text/css" id="#jarallax-clip-0">
    #jarallax-container-0 {
        clip: rect(0 320px 418px 0);
        clip: rect(0, 320px, 418px, 0);
    }
    </style>
</head>

<body>
    <!-- TAGLINE END-->
    <!-- Navbar STart -->
    <!-- tagline-height Extra CSS for Above TAgline-->
    <header id="topnav" class="defaultscroll sticky nav-sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="<?=$parentURL?>">
                <span class="logo-light-mode">
                    <!-- <img src="img/logo.png" width="45px" class="l-dark" alt="">&nbsp; -->
                    <!-- <img src="img/logo.png"  width="45px" class="l-light" alt=""> -->
                </span>
                <img src="<?=base_url('front/img/logo.png')?>" class="logo-light-mode" width="45px" alt="">
                <small class="text-dark">PFA</small>
            </a>
            <!-- Logo End -->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            <!--Login button Start-->
            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item ps-1 mb-0">
                    <a href="#!" target="_blank">
                        <div class="btn btn-icon btn-pills btn-primary d-sm-none d-inline-flex"><i class="uil uil-signin"></i></div>
                        <div class="btn btn-pills btn-primary d-none d-sm-block"><i class="uil uil-signin"></i> E-Portal</div>
                    </a>
                </li>
            </ul>
            <!--Login button End-->
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-right nav-light">
                    <li><a href="<?=$parentURL?>" class="sub-menu-item">Home</a></li>
                    <li><a href="<?=$parentURL?>about" class="sub-menu-item">About Us</a></li>
                    <li><a href="<?=$parentURL?>admission" class="sub-menu-item">Admission</a></li>
                    <li><a href="<?=$parentURL?>blog" class="sub-menu-item">News & Events</a></li>
                    <li><a href="<?=base_url()?>" class="sub-menu-item">Alumni</a></li>
                    <li><a href="<?=$parentURL?>contact'" class="sub-menu-item">Contact</a></li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->


    <!-- Hero Start -->
    <section class="bg-half-130 d-table w-100" data-jarallax='{"speed": 0.5}' style="background: url('<?=base_url('front/img/bg9.jpg')?>');">
        <div class="bg-overlay bg-gradient-overlay-2"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <!-- <p class="text-white-50 para-desc mx-auto mb-0">What we offer?</p> -->
                        <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Meet our Grads</h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <?php foreach ($alumni as $key => $alm): ?>
                <div class="col-md-6 col-13 my-3">
                    <div class="card features feature-primary feature-clean feature-transition p-3 border-0 shadow rounded flex-row align-items-center overflow-hidden">
                        <div class="icons text-center rounded me-2">
                           <img src="<?=$alm['Pix']?>" alt="passport" class="img-fluid mb-0">
                        </div>
                        <div class="content mt-4">
                            <a href="page-service-detail.html" class="h5 text-dark title"><?=$alm['Name']?></a>
                            <p class="text-muted mt-3">Class: <?=$alm['Class']?> <br> State of Origin: <?=$alm['State_of_Origin']?> <br> Favourite Food: <?=$alm['Favourite_Food']?> <br>Hobbies: <?=$alm['Hobbies']?> <br> Likes: <?=$alm['Likes']?> <br> Dislikes: <?=$alm['Dislikes']?></p>

                            <!-- <a href="page-service-detail.html" class="link">Read more <i class="uil uil-arrow-right"></i></a> -->
                        </div>

                        <div class="feature-ovelay-one"></div>
                        <div class="feature-ovelay-two"></div>
                        <div class="feature-ovelay-three"></div>
                    </div>
                </div><!--end col-->
            <?php endforeach; ?>
            </div><!--end row-->
        </div><!--end container-->



    <!-- Footer Start -->
    <footer class="bg-primary mb-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-30 footer-border">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-6 mb-0 pb-0 ">
                                <a href="<?=base_url('/')?>" class="logo-footer">
                                    <img src="<?=base_url('img/logo.png')?>" class="img-fluid" alt="" width="45px">
                                </a>
                                <p class="mt-1 text-light">Join us at PFA to walk tall</p>
                                <p class="mt-1 text-light"> <a href="tel:+2347040960516" class="text-light">0704 096 0516</a>  <br> <a href="tel:+2349154629290" class="text-light">0915 462 9290</a> <br></p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-1">

                                    <li class="list-inline-item"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded text-light"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/_prideoffaith_/" target="_blank" class="rounded text-light"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/prideoffaith" target="_blank" class="rounded text-light"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:prideoffaithacademy@gmail.com" class="rounded text-light"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->
                            <div class="col-lg-4 col-md-6 col-6 mt-sm-0  pt-sm-0">
                                <h5 class="footer-head">Address</h5>

                                <address><a href="https://goo.gl/maps/BjmTPtUVyvHnXA5B9" target="_blank" class="text-white">
                                    54, Ode-Lemo Road, <br>
                                    Sabo Sagamu, <br>
                                    Ogun State.
                                </a></address>

                                <p class="mt-1 text-light"> <a href="tel:+2348028207043" class="text-light">0802 820 7043</a>  <br> <a href="tel:+2348182479571" class="text-light">0818 247 9571</a> <br></p>
                            </div>
                            <!--end col-->
                            <div class="d-none d-lg-block col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Links</h5>
                                <ul class="list-unstyled footer-list mt-2">
                                    <li class=""><a href="<?=base_url('about')?>" class="text-foot text-light"><i class="uil uil-angle-right-b me-1"></i> About Us</a></li>
                                    <li><a href="<?=base_url('admission')?>" class="text-foot text-light"><i class="uil uil-angle-right-b me-1"></i> Admission</a></li>
                                    <li><a href="<?=base_url('blog')?>" class="text-foot text-light"><i class="uil uil-angle-right-b me-1"></i> News & Events</a></li>
                                    <!-- <li><a href="<?=base_url('contact')?>" class="text-foot text-light"><i class="uil uil-angle-right-b me-1"></i>Contact Us</a></li> -->
                                    <li><a href="<?=base_url('admission#fees')?>" class="text-foot text-light"><i class="uil uil-angle-right-b me-1"></i> Tuition & Fees</a></li>
                                </ul>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="text-center">
                <p class="pb-3 text-light m-0">
                    Designed with ❤️ by <a href="https://rayyantech.sgm.ng/" target="_blank" class="text-reset">RayyanTech</a>.
                </p>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up fea icon-sm icons align-middle">
            <line x1="12" y1="19" x2="12" y2="5"></line>
            <polyline points="5 12 12 5 19 12"></polyline>
        </svg></a>
    <!-- Back to top -->
    <!-- JAVASCRIPTS -->
    <script src="<?=base_url('front/js/bootstrap.bundle.min.js')?>"></script>
    <!-- <script src="js/gumshoe.polyfills.min.js"></script> -->
    <!-- Tiny slider -->
    <script src="<?=base_url('front/js/tiny-slider.js')?>"></script>
    <!-- Tobii -->
    <script src="<?=base_url('front/js/tobii.min.js')?>"></script>
    <!-- Parallax -->
    <script src="<?=base_url('front/js/parallax.js')?>"></script>
    <!-- Icons -->
    <!-- <script src="<?=base_url('front/js/feather.min.js')?>"></script> -->
    <!-- Custom -->
    <script src="<?=base_url('front/js/plugins.init.js')?>"></script>
    <style type="text/css">
    .typewrite>.wrap {
        border-right: 0.08em solid transparent
    }
    </style>
    <script src="<?=base_url('front/js/app.js')?>"></script>

</body>

</html>