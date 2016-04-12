@extends ('layouts.admin_template')
@section ('title')
    Order
@endsection

@section ('subtitle')
    Customer Order
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
   <h3>New Orders</h3>
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
    Created at: {{ $order->created_at }}
    <br>
    <a href="./admin_addprocOrders/{{ $order->order_id }}"><button>Process</button></a>
      <a href="./admin_addtrashOrders/{{ $order->order_id }}"><button>Delete</button></a>

      <br>
      <br>
      @endforeach

@endsection


  <!--   <h3>New Orders</h3>
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
    Created at: {{ $order->created_at }}
    <br>
    <a href="./admin_addprocOrders/{{ $order->order_id }}"><button>Process</button></a>
      <a href="./admin_addtrashOrders/{{ $order->order_id }}"><button>Delete</button></a>

      <br>
      <br>
      @endforeach -->

