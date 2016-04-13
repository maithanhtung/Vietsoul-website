@extends ('layouts.admin_template')
@section ('title')
    DASHBOARD
@endsection

@section ('subtitle')
    bla bla
@endsection

@section ('sidebar')
    <li>
        <a href="{{ url('/admin_dashboard') }}" class="active-menu"><i class="fa fa-dashboard"></i> Dashboard</a>
    </li>
    <li>
        <a href="{{ url('/admin_product') }}"><i class="fa fa-tag"></i> Product </a>
    </li>
    <li>
        <a href="{{ url('/admin_newOrders') }}"><i class="fa fa-bar-chart-o"></i> Orders </a>
    </li>
    <li>
        <a href="{{ url('/admin_customer') }}"><i class="fa fa-users"></i> Customer Account</a>
    </li>

    <li>
        <a href="{{ url('/admin_message') }}"><i class="fa fa-comments"></i> Messages </a>
    </li>
    <li>
        <a href="{{ url('/admin_faq') }}"><i class="fa fa-edit"></i> FAQ Update </a>
    </li>

    <li>
        <a href="#"><i class="fa fa-sitemap"></i> Bla<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="#">bla</a>
            </li>
            <li>
                <a href="#">bla</a>
            </li>
            <li>
                <a href="#">bla<span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                    <li>
                        <a href="#"> Link</a>
                    </li>
                    <li>
                        <a href="#"> Link</a>
                    </li>
                    <li>
                        <a href="#"> Link</a>
                    </li>

                </ul>

            </li>
        </ul>
    </li>
    <li>
        <a class="active-menu" href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
    </li>
@endsection

@section ('content')

<!-- Cards for counting new thing start -->
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="#">
                <div class="card blue summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-comments fa-4x"></i>
                        <div class="card-content">
                            <div class="title"> {{ $message }} </div>
                            <div class="sub-title">New Messages</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="#">
                <div class="card yellow summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-bar-chart-o fa-4x"></i>
                        <div class="card-content">
                            <div class="title"> {{ $order }} </div>
                            <div class="sub-title">New Orders</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="#">
                <div class="card green summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-users fa-4x"></i>
                        <div class="card-content">
                            <div class="title"> {{ $user }} </div>
                            <div class="sub-title">New Users</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="#">
                <div class="card red summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-tag fa-4x"></i>
                        <div class="card-content">
                            <div class="title"> {{ $total }} </div>
                            <div class="sub-title">New Products</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>

    </div>
<!-- Cards for counting new thing end -->

    Message count: {{ $message }}
    <br>
    Order count: {{ $order }}
    <br>
    User count: {{ $user }}
    <br>
    Sold total: {{ $sold }} USD
    <br>
    Profit: {{ $profit}} USD
    <br>
    Cost: {{ $cost }} USD
    <br>
    Bestproduct : {{ $bestproduct}}, take {{ $bestsold }}% of total sold products
    <br>




    <br>
    Total : {{ $total }} product(s)
    <br>
    Clothing : {{ $numclot }} product(s) , {{ $percentclot}}% of total products
    <br>
    Accessories : {{ $numacc }} product(s) , {{ $percentacc }}% of total products
    <br>
    Toys : {{ $numtoy }} product(s) , {{ $percenttoy }}% of total products
    <br>
    Artworks : {{ $numart }} product(s) , {{ $percentart }}% of total products
    <br>
    Others : {{ $numoth }} product(s) , {{ $percentoth }}% of total products
    <br>
@endsection



   <!--
    Message count: {{ $message }}
    <br>
    Order count: {{ $order }}
    <br>
    User count: {{ $user }}
    <br>
    Sold total: {{ $sold }} USD
    <br>
    Profit: {{ $profit}} USD
    <br>
    Cost: {{ $cost }} USD -->




