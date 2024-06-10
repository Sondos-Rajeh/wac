@extends('layouts.main')

@section('content')
    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 50000
                }}'>


            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/banner2-03.png);">
                    </div>

                    <!-- /.image-layer -->
                    <div class="main-slider-border"></div>
                    <div class="main-slider-border main-slider-border-two"></div>
                    <div class="main-slider-border main-slider-border-three"></div>
                    <div class="main-slider-border main-slider-border-four"></div>
                    <div class="main-slider-border main-slider-border-five"></div>
                    <div class="main-slider-border main-slider-border-six"></div>

                    <div class="main-slider-shape-1"></div>
                    <div class="main-slider-shape-2"></div>
                    <div class="main-slider-shape-3"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider__content">
                                <p> شركة الوحدة العربية</p>
                                    <h2>تقديم الخدمات للشركات النفطية وخدمات النظافة. 
                                    </br>تنفيذ عمليات النقل لكافة أنواع البضائع لجميع مناطق الجمهورية.
                                    </br> توفير الأيدي العاملة الماهرة وتوفير مركبات النقل بكافة احجامها.
                                      </br> تقديم خدمات التخليص الجمركي للبضائع من كافة المنافذ البرية والبحرية والجوية.
                                    </h2>
                                    <p clpss="thm-btn"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/banner2-04.png);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider-border"></div>
                    <div class="main-slider-border main-slider-border-two"></div>
                    <div class="main-slider-border main-slider-border-three"></div>
                    <div the="main-slider-border main-slider-border-four"></div>
                    <div class="main-slider-border main-slider-border-five"></div>
                    <div class="main-slider-border main-slider-border-six"></div>

                    <div class="main-slider-shape-1"></div>
                    <div class="main-slider-shape-2"></div>
                    <div class="main-slider-shape-3"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider__content">
                                <p> شركة الوحدة العربية</p>
                                    <h2>التطوير المستمر في تقديم الخدمات بالآليات والأساليب الحديثة وبما يتواكب مع
                                        التطورات الحاصلة </br> تحقيق التميز والريادة في تقديم الخدمات النفطية
                                        والخدمات العامة بالجودة العالية والتكاليف المناسبة
                                        </br> تقديم خدمات التخليص الجمركي من جميع الموانئ البرية والبحرية والجوية
                                        بسرعة ودقة وإتقان
                                        </br> التميز في تقديم خدمات النقل والتغطية الشاملة لجميع مناطق الجمهورية
                                        اليمنية
                                        </br> تقديم أفضل ما يحتاج إليه العميل من سرعة انجاز وأمان ودقة في الأداء
                                    </h2>
                                    <!-- <a href="about" class="thm-btn">اكتشف المزيد</a> -->
                                    <p clpss="thm-btn"></p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/banner2-03.png);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider-border"></div>
                    <div class="main-slider-border main-slider-border-two"></div>
                    <div class="main-slider-border main-slider-border-three"></div>
                    <div class="main-slider-border main-slider-border-four"></div>
                    <div class="main-slider-border main-slider-border-five"></div>
                    <div class="main-slider-border main-slider-border-six"></div>

                    <div class="main-slider-shape-1"></div>
                    <div class="main-slider-shape-2"></div>
                    <div class="main-slider-shape-3"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider__content">
                                    <p> شركة الوحدة العربية</p>
                                    <h2>شركة الوحدة العربية للخدمات النفطية، النقل، التخليص الجمركي والخدمات العامة.
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>

                                    </h2>
                                    <!-- <a href="about" class="thm-btn">اكتشف المزيد</a> -->
                                    <p clpss="thm-btn"></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>
            <div class="main-slider__nav" style="display: none;">
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow icon-left-arrow"></i>
                </div>
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow icon-left-arrow"></i>
                </div>

            </div>
        </div>
    </section>

    <!--Services One End -->
    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"><img
                class="float-bob-x" src="assets/images/shapes/services-one-shape.png" alt=""></div>
        <div class="container">
            <div class="services-one__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="services-one__top-left">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">شركة الوحدة العربية</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="services-one__top-text-box">
                            <p class="services-one__top-text">شركة الوحدة العربية
                                للخدمات النفطية ، النقل ، التخليص
                                الجمركي والخدمات العامة.
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="list-unstyled services-one__list">
                            <li class="services-one__single wow fadeInUp text-center" data-wow-delay="100ms">
                                <div class="services-one__icon">
                                    <span class="icon-online-shopping"></span>
                                </div>

                                <h3 class="services-one__title"><a href="about">من نحن</a></h3>
                                <a class="services-one__arrow" href="about"><span class="icon-right-arrow"></span></a>
                            </li>
                            <li class="services-one__single wow fadeInUp text-center" data-wow-delay="200ms">
                                <div class="services-one__icon">
                                    <span class="icon-growth"></span>
                                </div>

                                <h3 class="services-one__title"><a href="our-vision"> الرؤية </a></h3>
                                <a class="services-one__arrow" href="our-vision"><span
                                        class="icon-right-arrow"></span></a>
                            </li>
                            <li class="services-one__single wow fadeInUp text-center" data-wow-delay="300ms">
                                <div class="services-one__icon">
                                    <span class="icon-webpage"></span>
                                </div>

                                <h3 class="services-one__title"><a href="massege"> الرسالة</a></h3>
                                <a class="services-one__arrow" href="massege"><span
                                        class="icon-right-arrow"></span></a>
                            </li>
                            <li class="services-one__single wow fadeInUp text-center" data-wow-delay="400ms">
                                <div class="services-one__icon">
                                    <span class="icon-front-end"></span>
                                </div>

                                <h3 class="services-one__title"><a href="Our-services"> الخدمات </a></h3>
                                <a class="services-one__arrow" href="Our-services"><span
                                        class="icon-right-arrow"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services One End-->


    <!--Project One Start-->
    <section class="project-one">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">خدماتنا </h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="project-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                        <li data-filter=".filter-item" class="active"><span class="filter-text">الكل</span></li>
                        <li data-filter=".bra"><span class="filter-text">النقل</span></li>
                        <li data-filter=".photo"><span class="filter-text">النفطية</span></li>
                        <li data-filter=".web"><span class="filter-text">اللوجستية </span></li>
                        <li data-filter=".app"><span class="filter-text last-pd-none">التخليص الجمركي</span></li>
                    </ul>
                </div>
            </div>
            <div class="row filter-layout masonary-layout">
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra photo web">
                    <!--Portfolio One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/project-one-img-1.jpg" alt="">
                            <div class="project-one__hover project-one__hover-pl-40">
                                <p class="project-one__tagline">تصميم جرافيك</p>
                                <h3 class="project-one__title"><a href="project-details">تجربة فيملور</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 filter-item bra app web">
                    <!--Portfolio One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/project-one-img-2.jpg" alt="">
                            <div class="project-one__hover">
                                <p class="project-one__tagline">تصميم جرافيك</p>
                                <h3 class="project-one__title"><a href="project-details">تجربة فيملور</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra web">
                    <!--Portfolio One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/project-one-img-3.jpg" alt="">
                            <div class="project-one__hover project-one__hover-pl-40">
                                <p class="project-one__tagline">تصميم جرافيك</p>
                                <h3 class="project-one__title"><a href="project-details">تجربة فيملور</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra photo web">
                    <!--Portfolio One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/project-one-img-4.jpg" alt="">
                            <div class="project-one__hover project-one__hover-pl-40">
                                <p class="project-one__tagline">تصميم جرافيك</p>
                                <h3 class="project-one__title"><a href="project-details">تجربة فيملور</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra web">
                    <!--Portfolio One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/project-one-img-5.jpg" alt="">
                            <div class="project-one__hover project-one__hover-pl-40">
                                <p class="project-one__tagline">تصميم جرافيك</p>
                                <h3 class="project-one__title"><a href="project-details">تجربة فيملور</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item app photo">
                    <!--Portfolio One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/project-one-img-6.jpg" alt="">
                            <div class="project-one__hover project-one__hover-pl-40">
                                <p class="project-one__tagline">تصميم جرافيك</p>
                                <h3 class="project-one__title"><a href="project-details">تجربة فيملور</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 filter-item app photo">
                    <!--Portfolio One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/project-one-img-7.jpg" alt="">
                            <div class="project-one__hover">
                                <p class="project-one__tagline">تصميم جرافيك</p>
                                <h3 class="project-one__title"><a href="project-details">تجربة فيملور</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project One End-->


    <!--Blog One Start-->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">المشاريع</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Blog One Start-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets/images/blog/blog-one-img-1.jpg" alt="">
                            <a href="blog-details">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> أغسطس</p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details"><i class="far fa-folder-open"></i> الأعمال</a></li>
                                <li><a href="blog-details"><i class="far fa-comments"></i> 02 تعليقات</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title">
                                <a href="blog-details">احصل على بعض الحلول لتوظيف أفضل المرشحين</a>
                            </h3>
                            <div class="blog-one__person">
                                <div class="blog-one__person-img">
                                    <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                </div>
                                <div class="blog-one__person-content">
                                    <p>بواسطة مايك هاردسون</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Blog One Start-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets/images/blog/blog-one-img-2.jpg" alt="">
                            <a href="blog-details">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> أغسطس</p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details"><i class="far fa-folder-open"></i> الأعمال</a></li>
                                <li><a href="blog-details"><i class="far fa-comments"></i> 02 تعليقات</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title">
                                <a href="blog-details">جلب استراتيجيات البقاء على قيد الحياة للفوز</a>
                            </h3>
                            <div class="blog-one__person">
                                <div class="blog-one__person-img">
                                    <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                </div>
                                <div class="blog-one__person-content">
                                    <p>بواسطة مايك هاردسون</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Blog One Start-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets/images/blog/blog-one-img-3.jpg" alt="">
                            <a href="blog-details">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> أغسطس</p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details"><i class="far fa-folder-open"></i> الأعمال</a></li>
                                <li><a href="blog-details"><i the="far fa-comments"></i> 02 تعليقات</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title">
                                <a href="blog-details">استفد من الفاكهة المعلقة منخفضة لتحديد</a>
                            </h3>
                            <div class="blog-one__person">
                                <div class="blog-one__person-img">
                                    <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                </div>
                                <div class="blog-one__person-content">
                                    <p>بواسطة مايك هاردسون</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog One End-->
@endsection
