<!DOCTYPE html>
<html>
<head>
	<title>SHOPPING cart</title>
</head>
<body>

<?php 
	$products = session('products');
	?>
<h3>My cart:</h3>
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
	


</body>
</html>