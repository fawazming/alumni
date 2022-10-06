<!DOCTYPE html>
<html lang="en">

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
                    <!-- <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li class="megamenu-head">Classic Portfolio</li>
                                    <li><a href="portfolio-classic-two.html" class="sub-menu-item">Two Column</a></li>
                                    <li><a href="portfolio-classic-three.html" class="sub-menu-item">Three Column</a></li>
                                    <li><a href="portfolio-classic-four.html" class="sub-menu-item">Four Column</a></li>
                                    <li><a href="portfolio-classic-five.html" class="sub-menu-item">Five Column</a></li>
                                    <li><a href="portfolio-classic-six.html" class="sub-menu-item">Six Column</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Modern Portfolio</li>
                                    <li><a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a></li>
                                    <li><a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a></li>
                                    <li><a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a></li>
                                    <li><a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a></li>
                                    <li><a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Grid Portfolio</li>
                                    <li><a href="portfolio-grid-two.html" class="sub-menu-item">Two Column</a></li>
                                    <li><a href="portfolio-grid-three.html" class="sub-menu-item">Three Column</a></li>
                                    <li><a href="portfolio-grid-four.html" class="sub-menu-item">Four Column</a></li>
                                    <li><a href="portfolio-grid-five.html" class="sub-menu-item">Five Column</a></li>
                                    <li><a href="portfolio-grid-six.html" class="sub-menu-item">Six Column</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Masonry Portfolio</li>
                                    <li><a href="portfolio-classic-masonry.html" class="sub-menu-item">Classic Masonry</a></li>
                                    <li><a href="portfolio-modern-masonry.html" class="sub-menu-item">Modern Masonry</a></li>
                                    <li><a href="portfolio-grid-masonry.html" class="sub-menu-item">Grid Masonry</a></li>
                                    <li><a href="portfolio-project-masonry.html" class="sub-menu-item">Project masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Portfolio Detail</li>
                                    <li><a href="portfolio-detail-one.html" class="sub-menu-item">Portfolio One</a></li>
                                    <li><a href="portfolio-detail-two.html" class="sub-menu-item">Portfolio Two</a></li>
                                    <li><a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <li><a href="<?=$parentURL?>blog" class="sub-menu-item">News & Events</a></li>
                    <li><a href="https://alumni.sgm.ng" class="sub-menu-item">Alumni</a></li>
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
    <section class="section">
        <div class="container">
            <div class="row">
                <?php foreach ($alumni as $key => $alm): ?>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="card features feature-primary feature-clean feature-transition p-3 border-0 shadow rounded flex-row align-items-center overflow-hidden">
                        <div class="icons text-center rounded me-2">
                           <img src="<?=$alm['Pix']?>" alt="passport" class="img-fluid mb-0">
                        </div>
                        <div class="content mt-4">
                            <a href="page-service-detail.html" class="h5 text-dark title"><?=$alm['Name']?></a>
                            <p class="text-muted mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consectetur</p>

                            <a href="page-service-detail.html" class="link">Read more <i class="uil uil-arrow-right"></i></a>
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
                    <div class="footer-py-60 footer-border">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-6 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="#" class="logo-footer">
                                    <img src="<?=base_url('front/img/logo.png')?>" class="img-fluid" alt="" width="45px">
                                </a>
                                <p class="mt-4 text-light">Join us at PFA to walk tall</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">

                                    <li class="list-inline-item"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded text-light"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded text-light"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded text-light"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:support@shreethemes.in" class="rounded text-light"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->
                            <div class="col-lg-4 col-md-6 col-6 mt-sm-0  pt-sm-0">
                                <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Team</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                                </ul>
                            </div>
                            <!--end col-->
                            <div class="d-none d-lg-block col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Usefull Links</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Components</a></li>
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
                <p class="pb-3 m-0 text-light">
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