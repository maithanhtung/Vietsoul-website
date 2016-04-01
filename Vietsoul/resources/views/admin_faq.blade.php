<!DOCTYPE html>
<html>
   
    <body>
        <div class="container">
            {!! Form::open(array('route' => 'postFaq')) !!}
             <table style="width:100%; text-align:left;">
                <tr>
                  <th></th>
                  <th></th>
                </tr>
           <tr>    
             <td>Question: </td>  
             <td> {!! Form::input('string', 'faq_question') !!}</td>
          </tr>

            <tr>    
             <td>Answer :</td>  
             <td>{!! Form::input('string', 'faq_answer') !!}</td>
           </tr>

           <tr>    
             <td> Number :</td>  
             <td> {!! Form::input('integer', 'faq_number') !!}</td>
          </tr>

              </table>
       <br>
        	{!! Form::submit('Send') !!}

        	{!! Form::close() !!}

        </div>
<br>
<br>


        ALL FAQs:
        <br>
           @foreach ($faqs as $faq) 
   FAQ number: {{ $faq->faq_number }}
    <br>
   FAQ question: {{ $faq->faq_question }}
    <br>
   FAQ answer: {{ $faq->faq_answer }}
    <br>

    {{ Form::open(['route' => ['delFaq', $faq->faq_number], 'method' => 'delete']) }}
    <button type="submit">Delete</button>
      {{ Form::close() }}
    <br>
    <br>

      @endforeach
    
    </body>
</html>
