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
        <a href="{{ url('/admin_product') }}" class="active-menu"><i class="fa fa-tag"></i> Product </a>
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

@endsection


@section ('content')
     <a class="btn-floating btn-large waves-effect waves-light red" href="./admin_addproduct"><i class="material-icons">+</i></a>
  <div class="card">
        <table class="responsive-table highlight bordered ">
            <thead>
                <tr>
                    <th data-field="code">Code</th>
                    <th data-field="name">Name</th>
                    <th data-field="price">Price</th>
                    <th data-field="desc">Description</th>
                    <th data-field="number">Number</th>
                    <th>&nbsp</th>
                    <th>&nbsp</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td> {{ $product->product_code }} </td>
                    <td> {{ $product->product_name }} </td>
                    <td> $ {{ $product->product_price }} </td>
                    <td> {{ $product->product_description }} </td>
                    <td> {{ $product->product_number }} </td>
                    <td> {{ Form::open(['route' => ['delProduct', $product->product_code], 'method' => 'delete']) }} <button type="submit">Delete</button> {{ Form::close() }} </td>
                    <td> <a href="./admin_editproduct/{{ $product->product_code }}"><button>Edit</button></ </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


   <!-- code: {{ $product->product_code }}
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
      <a href="./admin_editproduct/{{ $product->product_code }}"><button>Edit</button></a> -->






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

