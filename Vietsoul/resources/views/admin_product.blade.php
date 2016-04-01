<!DOCTYPE html>
<html>
    <body>

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

      <br>
      <br>
      @endforeach
    </body>
    </html>