@extends('layouts.front')

@section('pageTitle',_lang('app.activities'))

@section('js')

@endsection

@section('content')

<section class="wrapper">
    <section class="content right_sidebar">
        <div class="container">
            <div class="dividerHeading">
                <h4><span>{{$activity->title}}</span></h4>
            </div>
            <div class="row sub_content">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="blog_large">
                        <figure class="post_img">
                            <!-- Post Image Slider -->
                            <div id="slider" class="swipe">
                                <ul class="swipe-wrap">
                                    @foreach($activity->images as $image)
                                    <li><img src="{{$image}}" alt=""></li>
                                    @endforeach
                                </ul>
                                <div class="swipe-navi">
                                    <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div> 
                                    <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Sidebar Widget-->
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <p>
                      {{$activity->description}}
                    </p>
                </div>
            </div><!--/.row-->
        </div> <!--/.container-->
    </section>
</section>




@endsection