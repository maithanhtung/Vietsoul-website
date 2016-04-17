@extends ('layouts.admin_template')
@section ('title')
  Order
@endsection

@section ('subtitle')
    Individual Customer Order
@endsection

@section ('sidebar')
    <li>
        <a href="{{ url('/admin_dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
    </li>
    <li>
        <a href="{{ url('/admin_product') }}"><i class="fa fa-tag"></i> Product </a>
    </li>
    <li>
        <a href="{{ url('/admin_newOrders') }}" class="active-menu"><i class="fa fa-bar-chart-o"></i> Orders </a>
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

@endsection

@section ('content')
    <div class="card">

        <div class="card-content container">
            <table class="responsive">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Product Code</th>
                    <th>Purchase Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->product_code }}</td>
                    <td class="title date-text">{{ $order->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>

    </div>
@endsection
<!-- <!DOCTYPE html>
<html>
<head>
	<title> Customer's Orders</title>
</head>
<body>
	@foreach ($orders as $order)
    Product code: {{ $order->product_code }}
    <br>
    User id: {{ $order->user_id }}
    <br>
    Created at: {{ $order->created_at }}
    <br>
    <br>
     @endforeach
</body>
</html> -->
