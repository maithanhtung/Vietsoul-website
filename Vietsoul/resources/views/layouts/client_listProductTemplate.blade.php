@extends('layouts.client_template')
@section('banner')
<section id="home" class="pfblock-image">
    <img src="{{ asset('assets/images//banner/product.jpg') }}">
</section>
@stop

@section('content')

    <section class="">
        <div class="container">
            <!--  Category start -->
            <br>
            <div id="category" class="nav navbar-nav navbar-left"> <br>
                <a href="./client_allProduct">All Products | </a>
                <a href="./client_clotProduct">Clothing | </a>
                <a href="./client_accProduct">Accessories | </a>
                <a href="./client_toyProduct">Toys | </a>
                <a href="./client_artProduct">Artworks | </a>
                <a href="./client_otherProduct">Other Products</a>
            </div>
            <!--  Category end -->
            <br>
            <div id="searchBox" class="nav navbar-nav navbar-right">
                {!! Form::open(array('route' => 'client_searchProduct')) !!}
                Type name here to search product: {!! Form::input('string', 'product_name') !!}
                {!! Form::submit('Search') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </section>


    <section id="productList" class="pfblock">
        <div class="container">
            <!-- List Product start -->
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="pfblock-header wow fadeInUp">
                        <h2 class="pfblock-title">
                             @yield('listTitle')
                        </h2>
                        <div class="pfblock-line"></div>
                        <div class="pfblock-subtitle">
                             @yield('listSubtitle')
                        </div>
                    </div>

                </div>

            </div><!-- .row -->


            <div class="row pfblock  pfblock-gray">
                @foreach ($products as $product)
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="grid wow zoomIn">
                            <figure class="effect-bubba">
                                <img src="assets/images/{{$product->product_code}}.jpg" class="img-responsive">
                                <figcaption>
                                    <h2>{{ $product->product_name }}</h2>
                                    <a href="#" data-toggle="modal" data-target="#{{ $product->product_code }}">View more</a>
                                    <p>$ {{ $product->product_price }}</p>
                                </figcaption>
                            </figure>
                            <a href="./client_addcart/{{ $product->product_code }}" title="Add to Cart"><img src="assets/icon/addCart.png"></a>
                        </div>
                    </div>

                    <div class="modal fade" id="{{ $product->product_code }}" tabindex="-1" role="dialog" aria-labelledby="Modal-labelVS">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="Modal-labelVS">{{ $product->product_name }}</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/images/{{$product->product_code}}a.jpg" alt="img01" class="img-responsive" />
                                    <div class="modal-works"><span></span><span></span></div>
                                     <p>Description: {{ $product->product_description }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                 @endforeach

            </div><!-- .row-->

        </div><!-- .contaier -->

    </section>

    <!-- List product end end -->
@stop
