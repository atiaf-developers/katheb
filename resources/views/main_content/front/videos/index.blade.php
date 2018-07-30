@extends('layouts.front')

@section('pageTitle',_lang('app.videos'))


@section('js')

@endsection

@section('content')

<section class="info_service">
    <div class="container">
        <div class="dividerHeading">
            <h4><span>{{ _lang('app.videos') }}</span></h4>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 video">
                @foreach ($videos as $video)
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <h3>{{ $video->title }}</h3>
                        <div class="video">
                            <iframe src="{{ $video->url }}" width="100%" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach

                <div class="pagination">
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>
</section>


@endsection