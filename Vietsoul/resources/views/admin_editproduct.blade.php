<!DOCTYPE html>
<html>    
    <body>
        <div class="container">
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

        </div>
    </body>
</html>
