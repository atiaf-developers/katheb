<header id="header">
    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 top-info">
                    <div class="language">
                        <a href="{{url($next_lang_code.'/'.substr(Request()->path(), 3))}}">{{$next_lang_text}}<i class="fa fa-flag"></i></a>
                    </div>
                    <div class="contact2 hidden-xs">
                        <p>{{$settings['phone']->value}}<i class="fa fa-phone"></i></p>
                        <p>{{$settings['email']->value}}<i class="fa fa-envelope"></i></p>
                    </div>
                </div>		
                <div class="col-sm-5 top-info">
                    <ul>
                        <li><a href="{{ $settings['social_media']->facebook ? $settings['social_media']->facebook : '#'  }}" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $settings['social_media']->twitter ? $settings['social_media']->twitter : '#'  }}" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{ $settings['social_media']->google ? $settings['social_media']->google : '#'  }}" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="{{ $settings['social_media']->youtube ? $settings['social_media']->youtube : '#'  }}" class="my-youtube"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO bar -->
    <div id="logo-bar" class="clearfix">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Logo / Mobile Menu -->
                <div class="col-xs-12">
                    <div id="logo">
                        <a href="{{_url('')}}"><img src="{{url('public/front/images')}}/logo.png" alt=""  style="display:block; margin:5px auto;"/></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container / End -->
    </div>
    <!--LOGO bar / End-->

    <!-- Navigation
================================================== -->
    <div class="navbar navbar-default navbar-static-top container" role="navigation">
        <!--  <div class="container">-->
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{$page_link_name==''?'active':''}}"><a href="{{_url('')}}">{{ _lang('app.home') }}</a>
                    </li>

                    <li class="{{$page_link_name=='about-us'?'active':''}}"><a href="{{_url('about-us')}}">{{ _lang('app.about_us') }}</a>
                    </li>

                    <li class="{{$page_link_name=='services'?'active':''}}"><a href="{{ _url('services') }}">{{ _lang('app.services') }}</a>
                    </li>

                    <li class="{{$page_link_name=='products'?'active':''}}"><a href="{{_url('products')}}">{{ _lang('app.products') }}</a>
                    </li>

                    <li class="{{$page_link_name=='activities'?'active':''}}"><a href="{{_url('activities')}}">{{_lang('app.activities')}}</a>
                    </li>

                    <li class="{{$page_link_name=='videos'?'active':''}}"><a href="{{_url('videos')}}">{{ _lang('app.videos') }}</a>
                    </li>

                    <li class="{{$page_link_name=='news'?'active':''}}"><a href="{{_url('news')}}">{{ _lang('app.news') }}</a>
                    </li>

                    <li class="{{$page_link_name=='gallery'?'active':''}}"><a href="{{_url('gallery')}}">{{ _lang('app.gallery') }}</a>
                    </li>

                    <li class="{{$page_link_name=='contact-us'?'active':''}}"><a href="{{_url('contact-us')}}">{{ _lang('app.contact_us') }}</a>
                    </li>
                </ul>
            </div>
        </div><!--/.row -->
        <!--</div>--><!--/.container -->
    </div>
</header>