<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Masmetrologia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href=<?= base_url("template/img/logo.ico");?>>

        <!-- CSS here -->
            <link rel="stylesheet" href=<?= base_url("template/css/bootstrap.min.css");?>>
            <link rel="stylesheet" href=<?= base_url("template/css/owl.carousel.min.css");?>>
            <link rel="stylesheet" href=<?= base_url("template/css/slicknav.css");?>>
            <link rel="stylesheet" href=<?= base_url("template/css/animate.min.css");?>>
            <link rel="stylesheet" href=<?= base_url("template/css/magnific-popup.css");?>>
            <link rel="stylesheet" href=<?= base_url("template/css/fontawesome-all.min.css");?>>
            <link rel="stylesheet" href=<?= base_url("template/css/themify-icons.css");?>>
            <link rel="stylesheet" href=<?= base_url("template/css/slick.css");?>>
            <link rel="stylesheet" href=<?= base_url("template/css/nice-select.css");?>>
            <link rel="stylesheet" href=<?= base_url("template/css/style.css");?>>
   </head>

   <body>
  
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src=<?= base_url("template/img/logo/logoshort.png");?> alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li>+(123) 1234-567-8901</li>
                                        <li>info@domain.com</li>
                                        <li>Mon - Sat 8:00 - 17:30, Sunday - CLOSED</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                    <a href="index.html"><img src=<?= base_url("template/img/logo/logo.png");?> alt=""></a>
                                    
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                            <li><a href=<?= base_url();?>>Inicio</a></li>
                                            <li><a href=<?= base_url('inicio/servicios');?>>Servicios</a>
                                            <ul class="submenu">
                                                    <li><a href="blog.html">calibracion</a></li>
                                                    <li><a href="single-blog.html">Medicion</a></li>
                                                    <li><a href="single-blog.html">Basculas</a></li>
                                                </ul>
                                            </li>    
                                            <li><a href=<?= base_url('inicio/contacto');?>>Contacto</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background=<?= base_url("template/img/hero/h1_hero.jpg");?>>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2><?= $inicio->tittle?></h2>
                                        <h2><?= $inicio->tittle?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background=<?= base_url("template/img/hero/h1_hero.jpg");?>>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">hand car wash and detailing service</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Construction</h2>
                                        <h2>Construction</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="services.html">Our Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    
   
    <!-- JS here -->
    
        <!-- All JS Custom Plugins Link Here here -->
        <script src=<?= base_url("template/js/vendor/modernizr-3.5.0.min.js");?>></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src=<?= base_url("template/js/vendor/jquery-1.12.4.min.js");?>></script>
        <script src=<?= base_url("template/js/popper.min.js");?>></script>
        <script src=<?= base_url("template/js/bootstrap.min.js");?>></script>
        <!-- Jquery Mobile Menu -->
        <script src=<?= base_url("template/js/jquery.slicknav.min.js");?>></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src=<?= base_url("template/js/owl.carousel.min.js");?>></script>
        <script src=<?= base_url("template/js/slick.min.js");?>></script>
        <!-- Date Picker -->
        <script src=<?= base_url("template/js/gijgo.min.js");?>></script>
        <!-- One Page, Animated-HeadLin -->
        <script src=<?= base_url("template/js/wow.min.js");?>></script>
        <script src=<?= base_url("template/js/animated.headline.js");?>></script>
        <script src=<?= base_url("template/js/jquery.magnific-popup.js");?>></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src=<?= base_url("template/js/jquery.scrollUp.min.js");?>></script>
        <script src=<?= base_url("template/js/jquery.nice-select.min.js");?>></script>
        <script src=<?= base_url("template/js/jquery.sticky.js");?>></script>
               
        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src=<?= base_url("template/js/jquery.counterup.min.js");?>></script>

        <!-- contact js -->
        <script src=<?= base_url("template/js/contact.js");?>></script>
        <script src=<?= base_url("template/js/jquery.form.js");?>></script>
        <script src=<?= base_url("template/js/jquery.validate.min.js");?>></script>
        <script src=<?= base_url("template/js/mail-script.js");?>></script>
        <script src=<?= base_url("template/js/jquery.ajaxchimp.min.js");?>></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src=<?= base_url("template/js/plugins.js");?>></script>
        <script src=<?= base_url("template/js/main.js");?>></script>
        
    </body>
</html>