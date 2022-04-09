 <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Masmetrologia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href=<?= base_url("template/img/favicon.ico");?>>

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
   </head>
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13584.000401927391!2d-106.3420031!3d31.661217!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xccdf9ccf12d45307!2sMetrologia%20Aplicada%20y%20Servicios%20S%20de%20RL%20de%20CV!5e0!3m2!1ses-419!2smx!4v1649445842429!5m2!1ses-419!2smx" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
                </div>
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'" placeholder=" Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo'" placeholder="Correo">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'" placeholder="Asunto">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>