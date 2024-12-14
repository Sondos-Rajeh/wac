<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>wac-ye.com | wac-ye.com</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Qutiiz HTML Template For Business" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Markazi+Text:wght@400..700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/qutiiz-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/qutiiz-icons-two/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/qutiiz.css" />
    <link rel="stylesheet" href="assets/css/qutiiz-responsive.css" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/logo.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper__left">

                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list" style="padding-right: 100px;">
                                <li>
                                    <a href="index">الرئيسية</a>

                                </li>
                                <li>
                                    <a href="about">من نحن</a>

                                </li>
                                <li>
                                    <a href="our-vision">الرؤية</a>

                                </li>
                                <li>
                                    <a href="massege">الرسالة</a>

                                </li>
                                <li>
                                    <a href="goals-and-values">الاهداف والقيم</a>

                                </li>
                                <li class="dropdown">
                                    <a href="our-services">خدماتنا</a>
                                    <ul>
                                        <li><a href="transportation-supply">النقل والتوريد</a></li>

                                        <li><a href="shipping-customs-clearance">الشحن والتخليص الجمركي</a></li>

                                        <li><a href="oil-services">الخدمات النفطية</a></li>

                                        <li><a href="storage-distribution">التخزين والتوزيع</a></li>

                                        <li><a href="contracting-and-construction">المقاولات والإنشاءات</a></li>

                                        <li><a href="water-env"> مشاريع المياه والاصحاح البيئي</a></li>


                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#">المشاريع</a>
                                    <ul>
                                        <li><a href="emergency-unit-projects"> مشاريع وحدة الطوارئ </a></li>
                                        <li><a href="clearance-project">مشروع التخليص</a></li>
                                    </ul>
                                </li>


                                <li><a href="contact">اتصل بنا</a></li>
                            </ul>
                        </div>

                        <div class="main-menu-wrapper__logo">

                            <!-- <div class="main-menu-wrapper__call">
                                <div class="main-menu-wrapper__call-icon">
                                    <span class="icon-chatting"></span>
                                </div>
                                <div class="main-menu-wrapper__call-number">
                                    <p>للتواصل والاستفسار</p>
                                    <h5><a href="tel:967714777755">967-714-777-755+</a></h5>
                                </div>
                            </div> -->
                            <div class="main-menu-wrapper__logo" style="margin-top:0px">
                                <a href="index"><img src="assets/images/logo.png" style="height:70px; width:100px;"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>



                    <div class="main-menu-wrapper__right">



                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <div class="page-content">
            @yield('content')
        </div>


        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__middle">
                <div class="site-footer-shape"
                    style="background-image: url(assets/images/shapes/site-footer-shape.png)"></div>
                <div class="container">
                    <div class="site-footer__middle-inner">
                        <div class="row">
                            <div class="col-xl-4 wow fadeInUp" data-wow-delay="100ms">

                                <div class="footer-widget__column footer-widget__about">
                                    <h3 class="footer-widget__title"> شركة الوحدة العربية </h3>
                                    <div class="footer-widget__about-text-box">
                                        للخدمات النفطية ، النقل ، التخليص
                                        الجمركي والخدمات العامة.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 wow fadeInUp" data-wow-delay="200ms" style="padding-right: 150px;">
                                <div class="footer-widget__column footer-widget__links clearfix">
                                    <h3 class="footer-widget__title">اﻻقسام</h3>
                                    <ul class="footer-widget__links-list list-unstyled clearfix">
                                        <li><a href="about"> من نحن</a></li>
                                        <li><a href="our-vision">الرؤية </a></li>
                                        <li><a href="massege">الرسالة</a></li>
                                        <li><a href="Goals and values">اﻻهداف و القيم</a></li>
                                        <li><a href="Our-services">خدماتنا</a></li>
                                        <li><a href="contact">اتصل بنا</a></li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 wow fadeInUp" data-wow-delay="400ms">

                                <ul class=" list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-square-alt"></i>
                                        </div>
                                        <div class="text">
                                            <a href="tel:714777755"> 714777755</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <a href="mailto:logisticsoperations@alwehda -alarabia.com"> logisticsoperations@alwehda -alarabia.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p>
                                                شارع نواكشوط - بالقرب من مستشفى المودة - مبنى عالم الصيدلة - الدور الرابع                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="site-footer__bottom-inner">
                                    <div class="site-footer__bottom-left">
                                        <img src="assets/images/logo.png" height="80px" width="120px">
                                    </div>
                                    <div class="site-footer__bottom-right">
                                        <div class="site-footer__top-right-social">
                                            <a href="#"><i class="fab fa-twitter" style="padding-left: 20px;"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@qutiiz.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>




    <!-- template js -->
    <script src="assets/js/qutiiz.js"></script>
</body>

</html>
