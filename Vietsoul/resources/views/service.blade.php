<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            {!! Form::open(array('route' => 'postMessage')) !!}
             <table style="width:100%; text-align:left;">
                <tr>
                  <th></th>
                  <th></th>
                </tr>
           <tr>    
             <td>Name: </td>  
             <td> {!! Form::input('string', 'name') !!}</td>
          </tr>

            <tr>    
             <td>Mail :</td>  
             <td>{!! Form::input('string', 'email') !!}</td>
           </tr>

           <tr>    
             <td> Content :</td>  
             <td> {!! Form::input('string', 'content') !!}</td>
          </tr>

              </table>
       <br>
        	{!! Form::submit('Send') !!}

        	{!! Form::close() !!}

        </div>
    </body>
</html>
