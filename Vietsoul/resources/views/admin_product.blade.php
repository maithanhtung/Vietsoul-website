@extends ('layouts.admin_template')
@section ('title')
    Product
@endsection

@section ('subtitle')
    Product Management
@endsection

@section ('sidebar')
    <li>
        <a href="{{ url('/admin_dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
    </li>
    <li>
        <a href="{{ url('/admin_product') }}" class="active-menu"><i class="fa fa-desktop"></i> Product </a>
    </li>
    <li>
        <a href="{{ url('/admin_newOrders') }}"><i class="fa fa-bar-chart-o"></i> Orders </a>
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
  <a href="./admin_addproduct"><button>ADD</button></a>
    <br>
    <br>
    @foreach ($products as $product)
   code: {{ $product->product_code }}
    <br>
     name: {{ $product->product_name }}
     <br>
     price: {{ $product->product_price }}
     <br>
     Description: {{ $product->product_description }}
     <br>
     number: {{ $product->product_number }}
     <br>

      {{ Form::open(['route' => ['delProduct', $product->product_code], 'method' => 'delete']) }}
      <button type="submit">Delete</button>
      {{ Form::close() }}
      <a href="./admin_editproduct/{{ $product->product_code }}"><button>Edit</button></a>

      @endforeach -->



@endsection


  <!--   <a href="./admin_addproduct"><button>ADD</button></a>
    <br>
    <br>
    @foreach ($products as $product)
   code: {{ $product->product_code }}
    <br>
     name: {{ $product->product_name }}
     <br>
     price: {{ $product->product_price }}
     <br>
     Description: {{ $product->product_description }}
     <br>
     number: {{ $product->product_number }}
     <br>

      {{ Form::open(['route' => ['delProduct', $product->product_code], 'method' => 'delete']) }}
      <button type="submit">Delete</button>
      {{ Form::close() }}
      <a href="./admin_editproduct/{{ $product->product_code }}"><button>Edit</button></a>

      @endforeach -->

