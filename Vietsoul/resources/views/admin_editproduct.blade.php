@extends ('layouts.admin_template')
@section ('title')
    Product
@endsection

@section ('subtitle')
    Updating Information
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
<div class="card">
    <div class="container">
         <h5 class="green-text center">Type new information and click GREEN button to save all</h5>
             <!-- Product:

            <p> product_code: {{ $products->product_code }} <br> product_name: {{ $products->product_name }} <br> product_price: {{ $products->product_price }} <br> Product_description: {{ $products->product_description }} <br> product_number {{ $products->product_number }}  </p> -->

    {!! Form::open(array('route' => array('posteditProduct', $products->product_code))) !!}

        <table class="card-content" style="width:90%; text-align:left;">

            <tr>
                <td class="card-title">Product Code </td>
                <td> {!! Form::text('product_code',$products->product_code)  !!} </td>
            </tr>

            <tr>
                <td class="card-title">Product Name </td>
                <td>{!! Form::text('product_name', $products->product_name)  !!}</td>
            </tr>

            <tr>
                <td class="card-title"> Product Price</td>
                <td> {!! Form::text('product_price', $products->product_price)  !!}</td>
            </tr>

            <tr>
                <td class="card-title"> Product Description</td>
                <td>{!! Form::text('product_description', $products->product_description)  !!}</td>
            </tr>

            <tr>
                <td class="card-title">Product Number</td>
                <td>{!! Form::text('product_number', $products->product_number)  !!}</td>
            </tr>

        </table>

        <button id="editProduct-btn" type="submit" class="btn waves-effect waves-light btn-floating btn-large green darken-1" title="Save">
                <i class="large material-icons">done</i>
        </button>
            <!-- {!! Form::submit('Edit') !!} -->

    {!! Form::close() !!}

    </div>
</div>
@endsection


    <!-- <div class="container">
             Product:

            <p> product_code: {{ $products->product_code }} <br> product_name: {{ $products->product_name }} <br> product_price: {{ $products->product_price }} <br> Product_description: {{ $products->product_description }} <br> product_number {{ $products->product_number }}  </p>

            {!! Form::open(array('route' => array('posteditProduct', $products->product_code))) !!}

                <table style="width:100%; text-align:left;">
                <tr>
                  <th></th>
                  <th></th>
                </tr>
           <tr>
             <td>Product_Code: </td>
             <td> {!! Form::text('product_code',$products->product_code)  !!} </td>
          </tr>

            <tr>
             <td>Product_Name: </td>
             <td>{!! Form::text('product_name', $products->product_name)  !!}</td>
           </tr>

           <tr>
             <td> Product_Price:</td>
             <td> {!! Form::text('product_price', $products->product_price)  !!}</td>
          </tr>

            <tr>
             <td> Product_Description:</td>
             <td>{!! Form::text('product_description', $products->product_description)  !!}</td>
           </tr>

            <tr>
             <td>Product_Number</td>
             <td>{!! Form::text('product_number', $products->product_number)  !!}</td>
           </tr>


       </table>
       <br>

            {!! Form::submit('Edit') !!}

            {!! Form::close() !!}

        </div> -->




