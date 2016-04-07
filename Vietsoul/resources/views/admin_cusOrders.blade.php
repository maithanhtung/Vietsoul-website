<!DOCTYPE html>
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
</html>