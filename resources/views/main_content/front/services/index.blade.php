@extends('layouts.front')

@section('pageTitle',_lang('app.services'))


@section('js')

@endsection

@section('content')

<section class="info_service">
    <div class="container">
        <div class="dividerHeading">
            <h4><span>{{ _lang('app.services') }}</span></h4>
        </div>
        <div class="row sub_content">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @foreach ($services as $service)
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="serviceBox_2">
                        <a href="{{ $service->url }}">
                            <img src="{{ $service->image }}" alt="" />
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                        </a>
                    </div>
                </div>
                @endforeach
                <div class="pagination">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</section>


@endsection