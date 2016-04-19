<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Viet Soul Souvevenir</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>

	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
    <script src="assets/js/modernizr.custom.js"></script>

</head>
<body>

	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>

	@yield('banner')
	<!-- Home start -->

	<!-- <section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
			<div class="start">Hello, we are</div>
			<h1>Viet Soul Souvenir</h1>
			<div class="start">providing Vietnamese handmade gifts</div>
		</div>

        <a href="#index.html">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>

	</section> -->

	<!-- Home end -->

	<!-- Navigation start -->

	<header class="header" id="nav-bar">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>

					</button>
					<a class="navbar-brand" href="{{ url('/') }}">Viet Soul</a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-center">
						<li><a href="{{ url('/client_allProduct') }}">Product</a></li>
            			<li><a href="{{ url('/client_aboutUs') }}">About Us</a></li>
						<li><a href="{{ url('/client_customerService') }}">Customer Service</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">

						<!-- <li>@if (Auth::check())
							<a>Welcome {{ Auth::user()->name }}</a>
							@endif
						</li> -->

						<li>
							<a href="{{ url('/client_login') }}">
								@if (Auth::check())
									Welcome {{ Auth::user()->name }}
								@endif
								<img src="assets/icon/myAccount.png" title="My Account" class="myAccount-icon">
							</a>
						</li>
						<li>
							<a href="{{ url('/client_myCart') }}">
								<img src="assets/icon/myCart.png" title="My Cart" class="myCart-icon">
								@if ( Session::has('products'))
									{{ count(Session::get('products')) }}
								@endif
							</a>
						</li>
						<!-- <li>
							@if ( Session::has('products'))
						{{ count(Session::get('products')) }}
						@endif
						</li> -->
					</ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->
	<div class="contents">
	@yield('content')
	</div>

	<!-- Footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

					<ul class="social-links">
						<li title="Like us on Facebook">
							<a href="{{ url('https://www.facebook.com/VietSoulTM/') }}" class="wow fadeInUp">
								<i class="fa fa-facebook"></i>
							</a>
						</li>

						<li title="Follow @VietSoul on Twitter">
							<a href="{{ url('https://twitter.com/VietSoulTM') }}" class="wow fadeInUp" data-wow-delay=".1s">
								<i class="fa fa-twitter"></i>
							</a>
						</li>

						<li title="Visit us on Google+">
							<a href="{{ url('https://plus.google.com/u/0/110977259142902681529/posts') }}" class="wow fadeInUp" data-wow-delay=".2s">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>

						<li title="Pin our product on Pinterest">
							<a href="{{ url('https://www.pinterest.com/ken_91vn/') }}" class="wow fadeInUp" data-wow-delay=".4s">
								<i class="fa fa-pinterest"></i>
							</a>
						</li>

						<li title="Find #VietSoul on Instagram">
							<a href="{{ url('https://www.instagram.com/vietsoulshop/') }}" class="wow fadeInUp" data-wow-delay=".5s">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
					</ul>

					<p class="heart">
                        Made with <span class="fa fa-heart fa-2x animated pulse"></span> in OAMK
                    </p>
                    <p class="copyright">
                        © 2016 LinhHangTung | Images: <a href="https://unsplash.com/">Unsplash</a> & <a href="http://zoomwalls.com/">Zoomwalls</a>
					</p>
					<div>Icons made by <a href="http://www.flaticon.com/authors/simpleicon" title="SimpleIcon">SimpleIcon</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>

    <!-- Scroll to top end-->

	<!-- Javascript files -->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.cbpQTRotator.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>
