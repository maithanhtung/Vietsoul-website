@extends('layouts.client_template')
@section('banner')
<!-- Home start -->

    <section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
        <div class="intro">
            <div class="start">Hello, we are</div>
            <h1>Viet Soul Souvenir</h1>
            <div class="start">providing Vietnamese handmade gifts</div>
        </div>

        <a href="#nav-bar">
        <div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
        </a>

    </section>

    <!-- Home end -->
@stop
@section('content')
    <section id="promo">
        <div class="container pfblock">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="pfblock-header wow fadeInUp">
                        <h2 class="pfblock-title">
                            Promotion and News
                        </h2>
                        <div class="pfblock-line"></div>
                        <div class="pfblock-subtitle">
                            Grand Opening Ceremony
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="free-ship">
                <div class="col-lg-6 wow slideInLeft animated">
                    <h2 id="frock">FROCK OUT WITH YOUR WALLET OUT!</h2>
                    <p>
                        FREE SHIPPING - Viet Soul store is kicking this spring off with a special offer: You can buy unlimited souvenir without any delivery fee. This will apply for all products. Please discover your favorite items:
                    </p>
                    <ul>
                        <li><a href="./client_clotProduct"> > Clothing</a></li>
                        <li><a href="./client_accProduct"> > Accessories</a></li>
                        <li><a href="./client_toyProduct"> > Toys</a></li>
                        <li><a href="./client_artProduct"> > Artworks</a></li>
                    </ul>
                    <a class="btn wow bounceInDown animated" id="shopNow-btn" href="{{ url('/client_allProduct') }}">Shop Now</a>
                </div>

                <div class="col-lg-6 wow slideInRight animated">
                    <img src="assets/images/banner/free-ship.jpg" class="pfblock-image responsive-image">
                </div>
            </div>

        </div>

        <div class="container">
            <div id="login-link" class="wow slideInRight animated">
                <p>Do you have a VietSoul customer account? <a href="{{ url('/register')}}">Sign up for free here!</a> - Are you VietSoul Admin? <a href="{{ url('/admin_dashboard')}}">Check your dashboard here!</a></p>
                <br>
            </div>
        </div>

    </section>


<!--
    <div class="container">
    <h1>Welcome to Vietsoul</h1>
    <br>
    <h3>Admin</h3>
    <a href="./admin_product"><button>Admin_product</button></a><br>
    <a href="./admin_message"><button>Admin_message</button></a><br>
    <a href="./admin_dashboard"><button>Admin_dashboard</button></a><br>
    <a href="./admin_faq"><button>Admin_faq</button></a><br>
    <a href="./admin_customer"><button>Admin_customer</button></a><br>
    <a href="./admin_newOrders"><button>Admin_order</button></a><br><br>

    <h3>CLient</h3>

    <a href="./client_allProduct"><button>Client_allProduct</button></a><br>
    <a href="./client_customerService"><button>client_customerService</button></a><br>
    <a href="./client_login"><button>Client_login</button></a><br>
    <a href="./client_aboutUs"><button>Client_aboutUs</button></a><br>

    </div> -->
@stop
