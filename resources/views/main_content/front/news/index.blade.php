@extends('layouts.front')

@section('pageTitle',_lang('app.news'))

@section('js')

@endsection

@section('content')

<section class="wrapper">
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
                                <a href="{{$one->url}}">
                                    <div class="pic">
                                        <img src="{{$one->image}}" alt="">
                                    </div>
                                    <div class="team_prof">
                                        <h3 class="names">{{$one->title}}</h3>
                                        <p class="description"> {{$one->description}}</p>
                                        <span>{{_lang('app.more')}}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                             @endforeach
                      
                    </div>
                </div>
            </section>
	</section>



@endsection