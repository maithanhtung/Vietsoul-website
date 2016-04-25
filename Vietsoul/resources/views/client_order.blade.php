@extends('layouts.client_template')

@section('content')
<section id="payment" class="pfblock">
	<div class="container">
		<div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title">
                         Order Information
                    </h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-image center">
                    	<img src="assets/icon/checkCart.png">
                    </div>
                    <br>
                    <div class="pfblock-subtitle notice-nothing">
                         Your order has been sent sucessfully. Thank you for your purchase!
                    </div>
                </div>

            </div>

            <div class="col-md-12 col-md-4">
                <a href="./client_customerService#message"><button class="btn btn-lg btn-block wow fadeInUp animated">Give us Feedback</button></a>
            </div>
            <div class="col-md-12 col-md-4"> </div>
            <div class="col-md-12 col-md-4">
                <a href="./client_allProduct"><button class="btn btn-lg btn-block wow fadeInUp animated">Come back to shopping</button></a>
            </div>

        </div><!-- .row -->
	</div>
</section>
@stop
