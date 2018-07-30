@extends('layouts.front')

@section('pageTitle',_lang('app.products'))


@section('js')

@endsection

@section('content')

<section class="wrapper">
 <section class="feature_bottom">
    <div class="container">
        <div class="row sub_content">
            <div class="dividerHeading">
                <h4><span>{{ _lang('app.products') }}</span></h4>
            </div>
            <div class="col-lg-12 margin">
               @foreach ($products as $product)
               <div class="col-lg-3 rec_blog">
                <a href="{{ $product->url }}">
                    <div class="blogPic">
                        <img alt="" src="{{ $product->image }}">
                        <div class="blog-hover">
                            <span class="icon">
                                <i class="fa fa-link"></i>
                            </span>
                        </div>
                    </div>
                    <div class="blogDetail">
                        <div class="blogTitle">
                            <h2>{{ $product->title }}</h2>
                        </div>
                        <div class="blogContent">
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="pagination">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
</section>
</section>




@endsection