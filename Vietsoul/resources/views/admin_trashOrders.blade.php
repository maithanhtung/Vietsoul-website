@extends ('layouts.admin_template')
@section ('title')
  Order
@endsection

@section ('subtitle')
    Was Deleted
@endsection

@section ('sidebar')
    <li>
        <a href="{{ url('/admin_dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
    </li>
    <li>
        <a href="{{ url('/admin_product') }}"><i class="fa fa-desktop"></i> Product </a>
    </li>
    <li>
        <a href="{{ url('/admin_newOrders') }}" class="active-menu"><i class="fa fa-bar-chart-o"></i> Orders </a>
    </li>
    <li>
        <a href="{{ url('/admin_customer') }}"><i class="fa fa-qrcode"></i> Customer Account</a>
    </li>

    <li>
        <a href="{{ url('/admin_message') }}"><i class="fa fa-table"></i> Messages </a>
    </li>
    <li>
        <a href="{{ url('/admin_faq') }}"><i class="fa fa-edit"></i> FAQ Update </a>
    </li>

@endsection

@section ('content')
    <div class="card">

        <div class="navbar">
            <nav>
                <div class="nav-wrapper blue">
                    <ul class="left hide-on-med-and-down">
                        <li><a href="{{ url('/admin_newOrders') }}">New Orders</a></li>
                        <li><a href="{{ url('/admin_procOrders') }}">Processing Orders</a></li>
                        <li class="active"><a href="{{ url('/admin_trashOrders') }}">Trash</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="card-content container">
            <ul class="collection">
            @foreach ($orders as $order)

                <li class="collection-item avatar">
                    <span class="title date-text">{{ $order->created_at }}</span>
                    <img src="assets/images/{{$order->product_code}}.jpg" class="circle" alt="item-image">

                    <p>
                        User ID: {{ $order->user_id }}
                        <br>
                        Product Code: {{ $order->product_code }}
                    </p>

                </li>
            @endforeach
            </ul>
        </div>

    </div>
@endsection
<!-- <!DOCTYPE html>
<html>
    <body>
    <h3>Trash</h3>
    <a href="./admin_newOrders"><button>admin_newOrders</button></a>
    <a href="./admin_procOrders"><button>admin_processOrders</button></a>
    <a href="./admin_trashOrders"><button>admin_trashOrders</button></a>
    <br>
    <br>
    @foreach ($orders as $order)
    Product code: {{ $order->product_code }}
    <br>
    User id: {{ $order->user_id }}
    <br>
    Updated at: {{ $order->updated_at }}
    <br>


      <br>
      <br>
      @endforeach
    </body>
    </html> -->
