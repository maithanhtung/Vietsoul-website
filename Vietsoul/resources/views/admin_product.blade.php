<!DOCTYPE html>
<html>
    <body>
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
      
      {{ Form::open(['route' => ['Delproduct', $product->product_code], 'method' => 'delete']) }}
      <button type="submit">Delete</button>
      {{ Form::close() }}

      @endforeach
    </body>
    </html>