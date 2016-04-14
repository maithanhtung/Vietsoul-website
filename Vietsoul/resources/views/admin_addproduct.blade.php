<!DOCTYPE html>
<html>
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
          <br>
           <a href="{{ url('/admin_product') }}" ><button>Back</button></a>

         @if(!empty(Session::get('product_name')))
         <h2>Sucessfully added product {{ Session::get('product_name')}}</h2>
         @endif
    </div>
  </div>

    </body>
</html>
