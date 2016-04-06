@extends('client_template')
@section('content')


<!--  Category start -->

    <div class="container">
        <div id="category" class="nav navbar-nav navbar-left"> <br>
            <a href="./client_allProduct"><button>All Products</button></a>
            <a href="./client_clotProduct"><button>Clothing</button></a>
            <a href="./client_accProduct"><button>Accessories</button></a>
            <a href="./client_toyProduct"><button>Toys</button></a>
            <a href="./client_artProduct"><button>Artworks</button></a>
            <a href="./client_otherProduct"><button>Other Products</button></a>
        </div>
        <div id="searchBox" class="nav navbar-nav navbar-right">
            {!! Form::open(array('route' => 'client_searchProduct')) !!}
            Type name here to search product: {!! Form::input('string', 'product_name') !!}
            {!! Form::submit('Search') !!}
            {!! Form::close() !!}
        </div>
    </div>

<!--  Category end -->


<!--  Output start-->

    <div class="container" id="productItem">
        @foreach ($products as $product)
       code: {{ $product->product_code }}
        <br>
         name: {{ $product->product_name }}
         <br>
         price: {{ $product->product_price }}
         <br>
         Description: {{ $product->product_description }}<!--  Category end -->
         <br>
         number: {{ $product->product_number }}
         <br>

          <a href="./client_addcart/{{ $product->product_code }}"><button>Add to cart</button></a>
         <br>
         <br>
        @endforeach
    </div>

<!--  Output end -->



<!-- List Product design start -->

    <section id="productList" class="pfblock">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="pfblock-header wow fadeInUp">
                        <h2 class="pfblock-title">Our product</h2>
                        <div class="pfblock-line"></div>
                        <div class="pfblock-subtitle">
                            product introduction bla bla blo blo
                        </div>
                    </div>

                </div>

            </div><!-- .row -->


            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-1.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Lorem Ipsum </h2>
                                <p>Add to cart</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-2.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Lorem Ipsum </h2>
                                <p>Add to cart</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-3.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Lorem Ipsum </h2>
                                <p>Add to cart</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-4.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Lorem Ipsum </h2>
                                <p>Add to cart</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-5.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Lorem Ipsum </h2>
                                <p>Add to cart</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-6.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Lorem Ipsum </h2>
                                <p>Add to cart</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

            </div>


        </div><!-- .contaier -->

    </section>

    <!-- List product end end -->
@stop
