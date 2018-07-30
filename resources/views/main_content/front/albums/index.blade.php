@extends('layouts.front')

@section('pageTitle',_lang('app.gallary'))


@section('js')

@endsection

@section('content')

<section class="wrapper">
    <section class="latest_work">
        <div class="container">
            <div class="row sub_content">
                <div class="carousel-intro">
                    <div class="col-md-12">
                        <div class="dividerHeading">
                            <h4><span>{{ _lang('app.gallary') }}</span></h4>
                        </div>
                    </div>
                </div>
                <div class="jcarousel col-md-12">
                    <!-- Recent Work Item -->

                    @foreach ($albums as $album)
                        <div class="hoverlay col-sm-4 col-md-4 col-lg-4 gallery">
                            <img src="{{ $album->image }}" alt="" />
                            <div class="hoverlay-box">
                                <div class="hoverlay-data">
                                    <h5>{{ $album->title }}</h5>
                                    <a class="hover-zoom mfp-image" href="{{ $album->image }}">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                 
                </div>
                  <div class="pagination">
                       {{ $albums->links() }}
                   </div>
            </div>
        </div>
    </section>
</section>


@endsection