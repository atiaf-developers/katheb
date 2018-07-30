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
            @foreach($slider as $one)
            <div class="slide">
                <img src="{{$one->image}}"  width="1920" height="auto" data-in="fade" data-out="fade" />
            </div>
            @endforeach

        </div>
    </div>
    <!--End Slider-->

    <section class="texture-section">
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="dividerHeading">
                        <h4><span>{{_lang('app.about_us')}}</span></h4>
                    </div>
                    <p>
                        {{str_limit(isset($settings['info']->about )?$settings['info']->about : '' , 600,'...')}}
                    </p>
                    <a href="{{_url('about-us')}}">{{_lang('app.read_more')}}</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="{{$settings['about_image']}}" class="img-responsive" alt=""/>
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
                        <h4><span>{{_lang('app.our_services')}}</span></h4>
                    </div>
                </div>
                @foreach($services as $one)
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="serviceBox_2">
                        <a href="{{$one->url}}">
                            <i class="fa fa-bell"></i>
                            <h3>{{$one->title}}</h3>
                            <p>{{$one->description}}</p>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--end info service-->

    <section class="feature_bottom">
        <div class="container">
            <div class="row sub_content">
                <div class="dividerHeading">
                    <h4><span>{{_lang('app.our_products')}}</span></h4>
                </div>
                @foreach($products as $one)
                <div class="col-lg-3 rec_blog">
                    <a href="{{$one->url}}">
                        <div class="blogPic">
                            <img alt="" src="{{$one->image}}">
                            <div class="blog-hover">
                                <span class="icon">
                                    <i class="fa fa-link"></i>
                                </span>
                            </div>
                        </div>
                        <div class="blogDetail">
                            <div class="blogTitle">
                                <h2>{{$one->title}}</h2>
                            </div>
                            <div class="blogContent">
                                <p>{{$one->description}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach


            </div>
        </div>
    </section>

    <section class="feature_bottom">
        <div class="container">
            <div class="row sub_content">
                <!-- TESTIMONIALS -->
                <div class="col-sm-6">
                    <div class="dividerHeading">
                        <h4><span>{{_lang('app.video')}}</span></h4>
                    </div>
                    <div class="video">
                        @if($video)
                        <iframe src="{{$video->url}}" width="100%" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        @endif
                    </div>
                </div><!-- TESTIMONIALS END -->

                <div class="col-sm-6">
                    <div class="dividerHeading">
                        <h4><span>{{_lang('app.activities')}}</span></h4>
                    </div>
                    @foreach($activities as $key=> $one)
                    @if($key==1)
                    <hr class="dashed">
                    @endif
                    <div class="post-recent">
                        <div class="post-images">
                            <img src="{{$one->image}}" alt=""/>
                        </div>

                        <div class="post-detail">
                            <h5>{{$one->title}}</h5>
                            <span>
                                <i class="fa fa-clock-o"></i>
                                {{$one->created_at}}
                            </span>
                            <p>
                                {{$one->description}}
                                <a class="read-more" href=" {{$one->url}}">{{_lang('app.more')}}</a>
                            </p>
                        </div>
                    </div>

                    @endforeach

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
                @foreach($news as $key=> $one)
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{$one->image}}" alt="">
                            <div class="social_media_team">
                                <ul class="team_social">
                                    <li><a class="twtr" href="{{$one->url}}" data-placement="top"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_prof">
                            <h3 class="names">{{$one->title}}</h3>
                            <p class="description"> {{$one->description}}</p>
                            <a href="{{$one->url}}">{{_lang('app.more')}}</a>
                        </div>
                    </div>
                </div>
                   @endforeach
             
            </div>
        </div>
    </section>

    <section class="latest_work">
        <div class="container">
            <div class="row sub_content">
                <div class="carousel-intro">
                    <div class="col-md-12">
                        <div class="dividerHeading">
                            <h4><span>{{_lang('app.gallery')}}</span></h4>
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
                         @foreach($albums as $key=> $one)
                        <li class="col-sm-3 col-md-3 col-lg-3">
                            <div class="hoverlay">
                                <img src="{{$one->m_image}}" alt="" />
                                <div class="hoverlay-box">
                                    <div class="hoverlay-data">
                                        <h5>{{$one->title}}</h5>
                                        <a class="hover-link" href="{{$one->url}}">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="hover-zoom mfp-image" href="{{$one->l_image}}">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
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
                        <a class="btn btn-default" href="{{_lang('app.send_a_complaint')}}">ارسل شكوى</a>
                        <em>{{_lang('app.or_contact_us')}}
                            <strong>
                                {{$settings['phone']->value}}
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