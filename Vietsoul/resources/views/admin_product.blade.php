<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
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
    </body>
</html>
