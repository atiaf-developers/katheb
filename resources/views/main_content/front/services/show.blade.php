@extends('layouts.front')

@section('pageTitle',_lang('app.services').' - '.$service->title)


@section('js')

@endsection

@section('content')

<section class="wrapper">
            <section class="texture-section">
                <div class="container">
                    <div class="row sub_content">
                        <div class="dividerHeading">
                                <h4><span>{{ $service->title }}</span></h4>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <img src="{{ $service->image }}" class="img-responsive" alt=""/>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <p>
                          {{ $service->description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>


@endsection