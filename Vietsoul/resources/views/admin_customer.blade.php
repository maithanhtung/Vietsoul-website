@extends ('layouts.admin_template')

@section ('title')
    Customer
@endsection

@section ('subtitle')
    All customer
@endsection

@section ('sidebar')
    <li>
        <a href="{{ url('/admin_dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
    </li>
    <li>
        <a href="{{ url('/admin_product') }}"><i class="fa fa-tag"></i> Product </a>
    </li>
    <li>
        <a href="{{ url('/admin_newOrders') }}"><i class="fa fa-bar-chart-o"></i> Orders </a>
    </li>
    <li>
        <a href="{{ url('/admin_customer') }}" class="active-menu"><i class="fa fa-users"></i> Customer Account</a>
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
  <h3>Customer</h3>
    @foreach ($users as $user)
    Id: {{ $user->id }}
    <br>
    Name: {{ $user->name }}
    <br>
    Email: {{ $user->email }}
    <br>
    <a href="./admin_cusOrders/{{ $user->id }}"><button>View Customer's orders</button></a>
    <br>
    <br>
        @endforeach

@endsection

   <!--  <h3>Customer</h3>
    @foreach ($users as $user)
    Id: {{ $user->id }}
    <br>
    Name: {{ $user->name }}
    <br>
    Email: {{ $user->email }}
    <br>
    <a href="./admin_cusOrders/{{ $user->id }}"><button>View Customer's orders</button></a>
    <br>
    <br>
        @endforeach -->


