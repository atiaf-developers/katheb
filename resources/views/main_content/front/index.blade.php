@extends('layouts.front')

@section('pageTitle',_lang('app.keswa'))


@section('js')
<script src=" {{ url('public/front/scripts') }}/contact.js"></script>
@endsection

@section('content')
<section class="wrapper">

    <!--Start Slider-->
    <div class="slider-wrapper">
        <div class="slider">
            <div class="fs_loader"></div>
            <div class="slide">
                <img src="images/fraction-slider/3.jpg"  width="1920" height="auto" data-in="fade" data-out="fade" />
            </div>

            <div class="slide">
                <img src="images/fraction-slider/1.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
            </div>

            <div class="slide">

                <img src="images/fraction-slider/2.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
            </div>

        </div>
    </div>
    <!--End Slider-->

    <section class="texture-section">
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="dividerHeading">
                        <h4><span>من نحن ؟</span></h4>
                    </div>
                    <p>
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                        الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة 
                        لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى 
                        نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النش
                        ر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا
                        قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج 
                        البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة،
                        وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها. 
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على ال
                        شكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                    </p>
                    <a href="aboutus.html">قراءة المزيد</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="images/apple-devices-2.png" class="img-responsive" alt=""/>
                </div>
            </div>
        </div>
    </section>

    <!--start info service-->
    <section class="info_service">
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="dividerHeading">
                        <h4><span>خدمتنا</span></h4>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="serviceBox_2">
                        <a href="services.html">
                            <i class="fa fa-bell"></i>
                            <h3>خدمة 1</h3>
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="serviceBox_2">
                        <i class="fa fa-briefcase"></i>
                        <h3>خدمة 2</h3>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="serviceBox_2">
                        <i class="fa fa-rocket"></i>
                        <h3>خدمة 3</h3>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end info service-->

    <section class="feature_bottom">
        <div class="container">
            <div class="row sub_content">
                <div class="dividerHeading">
                    <h4><span>منتجاتنا</span></h4>
                </div>
                <div class="col-lg-3 rec_blog">
                    <a href="product-details.html">
                        <div class="blogPic">
                            <img alt="" src="images/portfolio/1.jpg">
                            <div class="blog-hover">
                                <span class="icon">
                                    <i class="fa fa-link"></i>
                                </span>
                            </div>
                        </div>
                        <div class="blogDetail">
                            <div class="blogTitle">
                                <h2>منتج 1</h2>
                            </div>
                            <div class="blogContent">
                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 rec_blog">
                    <a href="product-details.html">
                        <div class="blogPic">
                            <img alt="" src="images/portfolio/2.jpg">
                            <div class="blog-hover">
                                <span class="icon">
                                    <i class="fa fa-link"></i>
                                </span>
                            </div>
                        </div>
                        <div class="blogDetail">
                            <div class="blogTitle">
                                <h2>منتج 1</h2>
                            </div>
                            <div class="blogContent">
                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 rec_blog">
                    <a href="product-details.html">
                        <div class="blogPic">
                            <img alt="" src="images/portfolio/1.jpg">
                            <div class="blog-hover">
                                <span class="icon">
                                    <i class="fa fa-link"></i>
                                </span>
                            </div>
                        </div>
                        <div class="blogDetail">
                            <div class="blogTitle">
                                <h2>منتج 1</h2>
                            </div>
                            <div class="blogContent">
                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 rec_blog">
                    <a href="product-details.html">
                        <div class="blogPic">
                            <img alt="" src="images/portfolio/2.jpg">
                            <div class="blog-hover">
                                <span class="icon">
                                    <i class="fa fa-link"></i>
                                </span>
                            </div>
                        </div>
                        <div class="blogDetail">
                            <div class="blogTitle">
                                <h2>منتج 1</h2>
                            </div>
                            <div class="blogContent">
                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="feature_bottom">
        <div class="container">
            <div class="row sub_content">
                <!-- TESTIMONIALS -->
                <div class="col-sm-6">
                    <div class="dividerHeading">
                        <h4><span>فيديو</span></h4>
                    </div>
                    <div class="video">
                        <iframe src="https://player.vimeo.com/video/198709071" width="100%" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div><!-- TESTIMONIALS END -->

                <div class="col-sm-6">
                    <div class="dividerHeading">
                        <h4><span>الفاعليات</span></h4>
                    </div>

                    <div class="post-recent">
                        <div class="post-images">
                            <img src="images/teams/1.jpg" alt=""/>
                        </div>

                        <div class="post-detail">
                            <h5>تنظيم مؤتمر</h5>
                            <span>
                                <i class="fa fa-clock-o"></i>
                                25 ابريل 2017
                            </span>
                            <p>
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                <a class="read-more" href="event-details.html">المزيد</a>
                            </p>
                        </div>
                    </div>
                    <hr class="dashed">
                    <div class="post-recent">
                        <div class="post-images">
                            <img src="images/teams/2.jpg" alt=""/>
                        </div>

                        <div class="post-detail">
                            <h5>تنظيم مؤتمر</h5>
                            <span>
                                <i class="fa fa-clock-o"></i>
                                25 ابريل 2017
                            </span>
                            <p>
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                <a class="read-more" href="event-details.html">المزيد</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row  sub_content">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="dividerHeading">
                        <h4><span>اهم الاخبار</span></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/teams/1.jpg" alt="">
                            <div class="social_media_team">
                                <ul class="team_social">
                                    <li><a class="twtr" href="#." data-placement="top"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_prof">
                            <h3 class="names">خبر 1</h3>
                            <p class="description"> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على</p>
                            <a href="event-details.html">المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/teams/2.jpg" alt="">
                            <div class="social_media_team">
                                <ul class="team_social">
                                    <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="gmail" href="#." data-placement="top" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_prof">
                            <h3 class="names">خبر 2</h3>
                            <p class="description">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على</p>
                            <a href="event-details.html">المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/teams/1.jpg" alt="">
                            <div class="social_media_team">
                                <ul class="team_social">
                                    <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="gmail" href="#." data-placement="top" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_prof">
                            <h3 class="names">خبر 3</h3>
                            <p class="description"> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على</p>
                            <a href="event-details.html">المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/teams/2.jpg" alt="">
                            <div class="social_media_team">
                                <ul class="team_social">
                                    <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="gmail" href="#." data-placement="top" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_prof">
                            <h3 class="names">خبر 4</h3>
                            <p class="description">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على</p>
                            <a href="event-details.html">المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest_work">
        <div class="container">
            <div class="row sub_content">
                <div class="carousel-intro">
                    <div class="col-md-12">
                        <div class="dividerHeading">
                            <h4><span>معرض الصور</span></h4>
                        </div>
                        <div class="carousel-navi">
                            <div id="work-prev" class="arrow-left jcarousel-prev"><i class="fa fa-angle-left"></i></div>
                            <div id="work-next" class="arrow-right jcarousel-next"><i class="fa fa-angle-right"></i></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="jcarousel recent-work-jc">
                    <ul class="jcarousel-list">
                        <!-- Recent Work Item -->
                        <li class="col-sm-3 col-md-3 col-lg-3">
                            <div class="hoverlay">
                                <img src="images/portfolio/1.jpg" alt="" />
                                <div class="hoverlay-box">
                                    <div class="hoverlay-data">
                                        <h5>اسم الصورة</h5>
                                        <a class="hover-link" href="portfolio_single.html">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="hover-zoom mfp-image" href="1.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-3 col-md-3 col-lg-3">
                            <div class="hoverlay">
                                <img src="images/portfolio/2.jpg" alt="" />
                                <div class="hoverlay-box">
                                    <div class="hoverlay-data">
                                        <h5>اسم الصورة</h5>
                                        <a class="hover-link" href="portfolio_single.html">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="hover-zoom mfp-image" href="images/portfolio/full/2.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-3 col-md-3 col-lg-3">
                            <div class="hoverlay">
                                <img src="images/portfolio/3.jpg" alt="" />
                                <div class="hoverlay-box">
                                    <div class="hoverlay-data">
                                        <h5>اسم الصورة</h5>
                                        <a class="hover-link" href="portfolio_single.html">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="hover-zoom mfp-image" href="images/portfolio/full/3.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-3 col-md-3 col-lg-3">
                            <div class="hoverlay">
                                <img src="images/portfolio/4.jpg" alt="" />
                                <div class="hoverlay-box">
                                    <div class="hoverlay-data">
                                        <h5>اسم الصورة</h5>
                                        <a class="hover-link" href="portfolio_single.html">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="hover-zoom mfp-image" href="images/portfolio/full/4.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-3 col-md-3 col-lg-3">
                            <div class="hoverlay">
                                <img src="images/portfolio/1.jpg" alt="" />
                                <div class="hoverlay-box">
                                    <div class="hoverlay-data">
                                        <h5>اسم الصورة</h5>
                                        <a class="hover-link" href="portfolio_single.html">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="hover-zoom mfp-image" href="images/portfolio/full/1.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-3 col-md-3 col-lg-3">
                            <div class="hoverlay">
                                <img src="images/portfolio/2.jpg" alt="" />
                                <div class="hoverlay-box">
                                    <div class="hoverlay-data">
                                        <h5>اسم الصورة</h5>
                                        <a class="hover-link" href="portfolio_single.html">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="hover-zoom mfp-image" href="images/portfolio/full/2.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-3 col-md-3 col-lg-3">
                            <div class="hoverlay">
                                <img src="images/portfolio/3.jpg" alt="" />
                                <div class="hoverlay-box">
                                    <div class="hoverlay-data">
                                        <h5>اسم الصورة</h5>
                                        <a class="hover-link" href="portfolio_single.html">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="hover-zoom mfp-image" href="images/portfolio/full/3.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-3 col-md-3 col-lg-3">
                            <div class="hoverlay">
                                <img src="images/portfolio/4.jpg" alt="" />
                                <div class="hoverlay-box">
                                    <div class="hoverlay-data">
                                        <h5>اسم الصورة</h5>
                                        <a class="hover-link" href="portfolio_single.html">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="hover-zoom mfp-image" href="images/portfolio/full/4.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Parallax & Get Quote Section -->
    <section class="parallax parallax-1">
        <div class="container">
            <!--<h2 class="center">Testimonials</h2>-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-item">
                        <h4>
                            للشكاوى</h4>
                        <p>
                            فى حالة حدوث مشكلة او الرغبة فى تقديم شكوى يرجى الضغط على زر ارسل شكوى
                        </p>
                        <a class="btn btn-default" href="Complaint.html">ارسل شكوى</a>
                        <em>أو الاتصال على
                            <strong>
                                009661523684745
                            </strong>
                        </em>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Parallax & Get Quote Section -->

</section>


@endsection