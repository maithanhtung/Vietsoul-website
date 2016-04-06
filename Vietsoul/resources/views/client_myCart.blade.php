<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title>SHOPPING cart</title>
</head>
<body>
<br>
<?php 
	$products = session('products');
    
	?>
<h3>My cart:</h3>
   <!-- TODO: them if vao -->
	@foreach ($products as $product)
		 <br>
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
          <a href="./client_delcart/{{ $product }}"><button>Remove from mycart</button></a>
         <br>
         <br>
        @endforeach

	   <a href="./client_order"><button>Check out</button></a>


</body>
</html>
=======
@extends('client_template')
@section('content')

<section id="myCart" class="pfblock">
    <div class="container">

        <?php
        	$products = session('products');

        ?>
        <div class="pfblock-header wow fadeInUp animated">
            <h2 class="pfblock-title">My cart</h2>
            <div class="pfblock-line"></div>
            <div class="pfblock-subtitle">
                All selected items
            </div>
        </div>

         <!-- TODO: them if vao -->
         <div class="pfblock-subtitle">
            <table class="table table-striped">

                   <!-- Table Headings -->
                   <thead>
                       <th>Code</th>
                       <th>Name</th>
                       <th>Price</th>
                       <th>Description</th>
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

                               <td class="table-text">
                                   <div>{{ $product->product_description }}</div>
                               </td>

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
        <br>
        <!--  <table class="table table-striped">
        	@foreach ($products as $product)
        		 <br>
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
                  <a href="./client_delcart/{{ $product }}"><button class="btn btn-lg">Remove from mycart</button></a>
                 <br>
                @endforeach
        </table> -->

        	    <a href="./client_order"><button class="btn btn-lg btn-block wow fadeInUp animated">Check out</button></a>
        </div>
</section>
@stop
>>>>>>> 3ba9e9a68d89ceeef87a61e45f41bb52a6f4f284
