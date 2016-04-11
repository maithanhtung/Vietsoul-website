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

        <a href="#index.html">
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

    </div>
@stop
