@extends('layouts.front')

@section('pageTitle',_lang('app.activities'))

@section('js')

@endsection

@section('content')

<section class="wrapper">
    <section class="feature_bottom">
        <div class="container">
            <div class="row sub_content">
                <div class="dividerHeading">
                    <h4><span>{{_lang('app.activities')}}</span></h4>
                </div>
                @foreach($activities as $one)
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="product">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <h2>{{$one->title}}</h2>
                            <span>
                                <i class="fa fa-clock-o"></i>
                                {{$one->created_at}}
                            </span>
                            <p>
                                {{$one->description}}
                                <a class="read-more" href="{{$one->url}}">{{_lang('app.more')}}</a>
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <img src="{{$one->image}}" alt=""/>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="pagination">
                    {{ $activities->links() }}
                </div>

            </div>
        </div>
    </section>
</section>



@endsection