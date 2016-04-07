@extends('client_template')
@section('content')

<section id="myCart" class="pfblock">
    <div class="container">

        <?php
        if (Session::has('products')){
        	$products = session('products');
        }
        else {
          echo "<h3>";
          echo "You add to your cart nothing";
          echo "</h3>";
        }

        ?>
        <div class="pfblock-header wow fadeInUp animated">
            <h2 class="pfblock-title">My cart</h2>
            <div class="pfblock-line"></div>
            <div class="pfblock-subtitle">
                All selected items
            </div>
        </div>

         @if((Session::has('products')))
         <div class="pfblock-subtitle">
            <table class="table table-striped">

                   <!-- Table Headings -->
                   <thead>
                       <th>Code</th>
                       <th>Name</th>
                       <th>Price</th>
                       <!-- <th>Description</th> -->
                       <th>Number</th>
                       <th>&nbsp;</th>
                   </thead>

                   <!-- Table Body -->
                   <tbody>
                       @foreach ($products as $product)
                           <tr>
                               <!-- Product Information -->
                               <td class="table-text">
                                   <div>{{ $product->product_code }}</div>
                               </td>

                               <td class="table-text">
                                   <div>{{ $product->product_name }}</div>
                               </td>

                               <td class="table-text">
                                   <div>{{ $product->product_price }}</div>
                               </td>

                              <!--  <td class="table-text">
                                   <div>{{ $product->product_description }}</div>
                               </td> -->

                               <td class="table-text">
                                   <div>{{ $product->product_number }}</div>
                               </td>

                               <td>
                                   <a href="./client_delcart/{{ $product }}"><button class="btn btn-lg">Remove from my cart</button></a>
                               </td>

                           </tr>
                       @endforeach
                   </tbody>
            </table>
        </div>
          @endif
        <br>
       	    <a href="./client_order"><button class="btn btn-lg btn-block wow fadeInUp animated">Check out</button></a>
        </div>
</section>
@stop

 
