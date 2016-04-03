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
        @endforeach
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
                                <h2>Crazy <span>Shark</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-2.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Funny <span>Tortoise</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-3.jpg" alt="img01"/>
                            <figcaption>
                                <h2>The <span>Hat</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-4.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Bang <span>Bang</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-5.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Crypton <span>Dude</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="assets/images/item-6.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Don't <span>Poke</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

            </div>


        </div><!-- .contaier -->

    </section>

    <!-- List product end end -->
@stop
