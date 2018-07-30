<header id="header">
    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 top-info">
                    <div class="language">
                        <a href="#">English<i class="fa fa-flag"></i></a>
                    </div>
                    <div class="contact2 hidden-xs">
                        <p>00962555448418<i class="fa fa-phone"></i></p>
                        <p>mail@example.com<i class="fa fa-envelope"></i></p>
                    </div>
                </div>		
                <div class="col-sm-5 top-info">
                    <ul>
                        <li><a href="" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" class="my-youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
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
                    <li class="active"><a href="{{_url('')}}">الرئيسية</a>
                    </li>

                    <li><a href="{{_url('about-us')}}">{{ _lang('app.about_us') }}</a>
                    </li>

                    <li><a href="{{ _url('services') }}">{{ _lang('app.services') }}</a>
                    </li>

                    <li><a href="{{_url('products')}}">{{ _lang('app.products') }}</a>
                    </li>

                    <li><a href="{{_url('activities')}}">{{_lang('app.activities')}}</a>
                    </li>

                    <li><a href="{{_url('videos')}}">{{ _lang('app.videos') }}</a>
                    </li>

                    <li><a href="{{_url('products')}}">{{ _lang('app.videos') }}</a>
                    </li>

                    <li><a href="{{_url('gallery')}}">{{ _lang('app.gallery') }}</a>
                    </li>

                    <li><a href="{{_url('contact-us')}}">{{ _lang('app.contact_us') }}</a>
                    </li>
                </ul>
            </div>
        </div><!--/.row -->
        <!--</div>--><!--/.container -->
    </div>
</header>