@extends('client_template')
@section('content')

    <div class="container">
        @foreach ($products as $product)
       code: {{ $product->product_code }}
        <br>
         name: {{ $product->product_name }}
         <br>
         price: {{ $product->product_price }}
         <br>
         Description: {{ $product->product_description }}
         <br>
         number: {{ $product->product_number }}
         <br>

         <br>
          <a href="./client_addcart/{{ $product->product_code }}"><button>Add to cart</button></a>
         <br>
        @endforeach

        <a href="./client_allProduct"><button>Client_allProduct</button></a>
        <a href="./client_clotProduct"><button>Client_clotProduct</button></a>
         <a href="./client_accProduct"><button>Client_accProduct</button></a>
         <a href="./client_toyProduct"><button>Client_toyProduct</button></a>
          <a href="./client_artProduct"><button>Client_artProduct</button></a>
          <a href="./client_otherProduct"><button>Client_otherProduct</button></a>
          <br>
          {!! Form::open(array('route' => 'client_searchProduct')) !!}
          Type name here to search product: {!! Form::input('string', 'product_name') !!}
          {!! Form::submit('Send') !!}
          {!! Form::close() !!}

    </div>




<!-- List Product start -->

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
