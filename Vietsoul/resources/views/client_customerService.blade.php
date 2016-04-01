<!DOCTYPE html>
<html>
   
    <body>
<h3>All FAQS</h3>
 @foreach ($faqs as $faq) 
   FAQ number: {{ $faq->faq_number }}
    <br>
   FAQ question: {{ $faq->faq_question }}
    <br>
   FAQ answer: {{ $faq->faq_answer }}
    <br>
    <br>
      @endforeach
<br>
<br>
    <h3>Drop us a line :</h3>
    <br>
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
