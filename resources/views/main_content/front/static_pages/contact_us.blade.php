@extends('layouts.front')

@section('pageTitle',_lang('app.contact_us'))

@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWYbhmg32SNq225SO1jRHA2Bj6ukgAQtA&libraries=places&language={{App::getLocale()}}"></script>

<script src="{{url('public/front/scripts')}}/map.js" type="text/javascript"></script>
<script src=" {{ url('public/front/scripts') }}/contact.js"></script>
@endsection

@section('content')
<section class="wrapper">
    <section class="content contact">
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="sidebar contactus">
                        <div class="widget_info">
                            <div class="dividerHeading">
                                <h4><span>{{ _lang('app.contact_us') }}</span></h4>
                            </div>
                            <div class="widget_content">
                                <p>{{str_limit(isset($settings['info']->about )?$settings['info']->about : '' , 100,'')}} </p>
                                <ul class="contact-details-alt">
                                    <li><i class="fa fa-map-marker"></i> <p><strong>{{_lang('app.address')}}</strong>:{{ isset($settings['info']->address )?$settings['info']->address : ''  }}</p></li>
                                    <li><i class="fa fa-user"></i> <p><strong>{{_lang('app.phone')}}</strong>:{{ isset($settings['phone'] )? $settings['phone']->value : ''  }}</p></li>
                                    <li><i class="fa fa-envelope"></i> <p><strong>{{_lang('app.email')}}</strong>: <a href="#">{{ isset($settings['email'] )? $settings['email']->value : ''  }}</a></p></li>
                                </ul>
                            </div>  
                        </div>

                        <div class="widget_social">
                            <div class="dividerHeading">
                                <h4><span>{{_lang('app.follow_us_on')}}</span></h4>
                            </div>
                            <ul class="widget_social">
                                <li><a class="fb" href="{{ $settings['social_media']->facebook ? $settings['social_media']->facebook : '#'  }}" data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twtr" href="{{ $settings['social_media']->twitter ? $settings['social_media']->twitter : '#'  }}" data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="my-google" href="{{ $settings['social_media']->google ? $settings['social_media']->google : '#'  }}" data-placement="top" data-toggle="tooltip" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="youtube" href="{{ $settings['social_media']->youtube ? $settings['social_media']->youtube : '#'  }}" data-placement="top" data-toggle="tooltip" title="youtube"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="dividerHeading">
                        <h4><span>ارسل لنا</span></h4>
                    </div>

                    <div class="alert alert-success" style="display:{{Session('successMessage')?'block;':'none;'}}; " role="alert"><i class="fa fa-check" aria-hidden="true"></i> <span class="message">{{Session::get('successMessage')}}</span></div>
                    <div class="alert alert-danger" style="display:{{Session('errorMessage')?'block;':'none;'}}; " role="alert"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span class="message">{{Session::get('errorMessage')}}</span></div>

                    <form action="" method="post" class="contactus" id="contacts-form">
                        {{ csrf_field() }}
                        <div class="row">

                            <div class="col-lg-6 form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" id="name" name="name" class="form-control" maxlength="100" value="" placeholder="{{ _lang('app.name') }}" >
                                <span class="help-block">
                                    @if ($errors->has('name'))
                                    {{ $errors->first('name') }}
                                    @endif
                                </span>
                            </div>

                            <div class="col-lg-6 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" id="email" name="email" class="form-control" value="" placeholder="{{ _lang('app.email') }}" >
                                <span class="help-block">
                                    @if ($errors->has('email'))
                                    {{ $errors->first('email') }}
                                    @endif
                                </span>
                            </div>

                            <div class="col-md-12 form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                                <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="{{ _lang('app.subject') }}">
                                <span class="help-block">
                                    @if ($errors->has('subject'))
                                    {{ $errors->first('subject') }}
                                    @endif
                                </span>
                            </div>

                            <div class="col-md-12 form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                                <textarea id="message" class="form-control" name="message" rows="10" cols="50" placeholder="{{ _lang('app.message') }}"></textarea>
                                <span class="help-block">
                                    @if ($errors->has('message'))
                                    {{ $errors->first('message') }}
                                    @endif
                                </span>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" class="submit-form btn btn-default btn-lg" value="{{ _lang('app.send') }}">
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
                <div class="row sub_content">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <input value="{{$settings['lat']->value  }}" type="hidden" id="lat" >
                    <input value="{{ $settings['lng']->value }}" type="hidden" id="lng" >
                        <span class="help-block utbox"></span>
                        <div class="maplarger">

                            <div id="map" style="height: 500px; width:100%;"></div>
                            <div id="infowindow-content">
                                <span id="place-name"  class="title"></span><br>
                                <span id="place-address"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </section>



    @endsection