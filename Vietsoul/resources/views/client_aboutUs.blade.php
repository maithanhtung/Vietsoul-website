@extends('layouts.client_template')

@section('banner')
<section id="home" class="pfblock-image">
    <img src="{{ asset('assets/images//banner/aboutUs.jpg') }}">
</section>
@stop

@section('content')
 <!-- Services start -->

	<section id="services" class="pfblock">
		<div class="container">

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">This is what we provide</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							The heart and soul of Viet Soul  is our global community.
						</div>
					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<span class="icon-magic-wand"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Unique Items</h3>
							<div class="iconbox-desc">
								Handmade items, vintage goods and craft supplies you can’t find anywhere else

							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<span class="icon-puzzle"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Traditional values</h3>
							<div class="iconbox-desc">
								We are a mindful, transparent, and humane business. Our plan and build for the long term .
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-badge"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">High Quality</h3>
							<div class="iconbox-desc">
								Get curated recommendations tailored to your taste. VS‘s value craftsmanship in all we make.

							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-question"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Customer Support</h3>
							<div class="iconbox-desc">
								 Track and manage orders and get help with missing, damaged or incorrect orders

							</div>
						</div>
					</div>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Services end -->



<!-- Skills start -->

    <section id="skills"  class="pfblock  pfblock-gray">

			<div class="container">

				<div class="row skills">

					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">Customer's Satisfaction</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    This is how people are happy with Viet Soul souvenir
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="85" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">85</span>
                        </span>
						<h3 class="text-center">Ease of check-out</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">90</span>
                        </span>
						<h3 class="text-center">Variety of brands/products</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="95" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">95</span>
                        </span>
						<h3 class="text-center">Ability to create an account</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
						<h3 class="text-center">Free/discounted shipping</h3>
					</div>

				</div><!--End row -->

			</div>

    </section>

    <!-- Skills end -->

    <!-- Testimonials start -->

	<section id="testimonials" class="pfblock">

		<div class="container">

            <div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">What our clients say</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
						Thanks for all. We are trying more to get better positive feedback
						</div>
					</div>

				</div>

			</div><!-- .row -->

            <div class="row">

			<div id="cbp-qtrotator" class="cbp-qtrotator">
                <div class="cbp-qtcontent">
                    <img src="assets/images/client-1.jpg" alt="client-1" />
                    <blockquote>
                      <p>Bought it for a gift. Beautiful purse both inside and out. Came in perfect condition and great size for an everyday purse</p>
                      <footer>Johny Tri</footer>
                    </blockquote>
                </div>
                <div class="cbp-qtcontent">
                    <img src="assets/images/client-2.jpg" alt="client-2" />
                    <blockquote>
                      <p>It was more than I expected. Materials was good for the price! 😍😍 love the bag, recieved a lot of complement whrn I use it, I bought 2 bags, and gave the other bag to my sister, she was satisfied and was happy with her gift</p>
                      <footer>Maria Anna</footer>
                    </blockquote>
                </div>

            </div>

            </div><!-- .row -->


		</div><!-- .row -->
	</section>

	<!-- Testimonial end -->

@stop
