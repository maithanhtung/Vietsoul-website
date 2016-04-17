@extends ('layouts.admin_template')
@section ('title')
    Product
@endsection

@section ('subtitle')
    Adding new item
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
        <div class="alert alert-info center">
            <h5>Rule!</h5>
            <p>Product code must be unique and contain exactly 5 or 6 characters with syntax: category-number. Ex: toy01, acc09, clot03, art11, oth14...</p>
        </div>

        <div class="container">

            {!! Form::open(array('route' => 'postProduct')) !!}

            <div class="row">

                <div class="row">
                    <div class="input-field col s6">
                        <input id="vs_code" type="text" class="validate" name="product_code" length="6" required>
                        <label for="vs_code">Code</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="vs_name" type="text" class="validate" name="product_name" length="50" required>
                        <label for="vs_name">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="vs_price" type="number" class="validate" name="product_price" required>
                        <label for="vs_price">Price</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="vs_number" type="number" class="validate" name="product_number">
                        <label for="vs_number">Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="vs_desc" class="materialize-textarea" name="product_description" length="150"></textarea>
                        <label for="vs_desc">Description</label>
                    </div>
                </div>

            </div>

            <a id="backProduct-btn" class="btn waves-effect waves-light blue" href="{{ url('/admin_product') }}" title="Back to see the product list">
                <i class="material-icons">undo</i>BACK
            </a>

            <button id="addProduct-btn" class="btn waves-effect waves-light green" type="submit" name="action">ADD
                <i class="material-icons right">send</i>
            </button>

        {!! Form::close() !!}

        </div>
        @if(!empty(Session::get('product_name')))
            <p class="card-content center">
            Product <strong id="productName-added">{{ Session::get('product_name')}}</strong> has been added sucesfully!
            </p>
         @endif
    </div>

@endsection

        <!-- <div class="container">



            {!! Form::open(array('route' => 'postProduct')) !!}
             <table style="width:100%; text-align:left;">
                <tr>
                  <th></th>
                  <th></th>
                </tr>
           <tr>
             <td>Code: </td>
             <td> {!! Form::input('string', 'product_code') !!}</td>
          </tr>

            <tr>
             <td>name :</td>
             <td>{!! Form::input('string', 'product_name') !!}</td>
           </tr>

           <tr>
             <td> price :</td>
             <td> {!! Form::input('integer', 'product_price') !!}</td>
          </tr>

           <tr>
             <td> description :</td>
             <td> {!! Form::input('string', 'product_description') !!}</td>
          </tr>

          <tr>
             <td> Number :</td>
             <td> {!! Form::input('integer', 'product_number') !!}</td>
          </tr>

              </table>
       <br>
        	{!! Form::submit('Send') !!}

        	{!! Form::close() !!}
        </div>
          <br>
           <a href="{{ url('/admin_product') }}" ><button>Back</button></a>

         @if(!empty(Session::get('product_name')))
         <h2>Sucessfully added product {{ Session::get('product_name')}}</h2>
         @endif

 -->
