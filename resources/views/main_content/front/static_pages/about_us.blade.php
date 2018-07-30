@extends('layouts.front')

@section('pageTitle',_lang('app.about_keswa'))

@section('js')
	
@endsection

@section('content')
<section class="wrapper">
            <section class="texture-section">
                <div class="container">
                    <div class="dividerHeading">
                            <h4><span>{{_lang('app.about_us')}}</span></h4>
                    </div>
                    <div class="row sub_content">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <p>
                              {{$settings['info']->about}}
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <img src="{{$settings['about_image']}}" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
            </section>
	</section>
  

@endsection