<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>{{_lang('app.katheb')}}</span></h4>
                </div>
                <div class="widget_content">
                    <p>{{str_limit(isset($settings['info']->about )?$settings['info']->about : '' , 100,'')}}</p>
                    <ul class="contact-details-alt">
                        <li><i class="fa fa-map-marker"></i> <p><strong>{{_lang('app.address')}}</strong>:{{ isset($settings['info']->address )?$settings['info']->address : ''  }}</p></li>
                        <li><i class="fa fa-user"></i> <p><strong>{{_lang('app.phone')}}</strong>:{{ isset($settings['phone'] )? $settings['phone']->value : ''  }}</p></li>
                        <li><i class="fa fa-envelope"></i> <p><strong>{{_lang('app.email')}}</strong>: <a href="#">{{ isset($settings['email'] )? $settings['email']->value : ''  }}</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>{{_lang('app.menu')}}</span></h4>
                </div>
                <div class="widget_content">
                    <ul class="links">
                        <li><a href="{{_url('')}}">{{_lang('app.home')}}</a></li>
                        <li><a href="{{_url('about-us')}}">{{_lang('app.about_us')}}</a></li>
                        <li><a href="{{_url('services')}}">{{_lang('app.services')}}</a></li>
                        <li><a href="{{_url('products')}}">{{_lang('app.products')}}</a></li>
                        <li><a href="{{_url('activities')}}">{{_lang('app.activities')}}</a></li>
                        <li><a href="{{_url('videos')}}">{{_lang('app.videos')}}</a></li>
                        <li><a href="{{_url('news')}}">{{_lang('app.news')}}</a></li>
                        <li><a href="{{_url('gallery')}}">{{_lang('app.gallery')}}</a></li>
                        <li><a href="{{_url('contact-us')}}">{{_lang('app.contact_us')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 hidden-sm hidden-xs">
                <div class="widget_title">
                    <h4><span>{{_lang('app.products')}}</span></h4>
                </div>
                <div class="widget_content">
                    <ul class="links">
                        @foreach($products as $one)
                        <li><a href="{{$one->url}}">{{$one->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 hidden-sm hidden-xs">
                <div class="widget_title">
                    <h4><span>{{_lang('app.follow_us_on')}}</span></h4>
                </div>
                <div class="footer_social">
                    <ul class="footbot_social">
                        <li><a class="fb" href="{{ $settings['social_media']->facebook ? $settings['social_media']->facebook : '#'  }}" data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twtr" href="{{ $settings['social_media']->twitter ? $settings['social_media']->twitter : '#'  }}" data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="my-google" href="{{ $settings['social_media']->google ? $settings['social_media']->google : '#'  }}" data-placement="top" data-toggle="tooltip" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="youtube" href="{{ $settings['social_media']->youtube ? $settings['social_media']->youtube : '#'  }}" data-placement="top" data-toggle="tooltip" title="youtube"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
  <section class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <p class="copyright"> &copy; حقوق الطبع محفوظة كثيب | تصميم وبرمجة <a href="http://www.jqueryrain.com/">أطياف</a></p>
                </div>
            </div>
        </div>
    </section>