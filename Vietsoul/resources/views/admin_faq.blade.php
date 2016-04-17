@extends ('layouts.admin_template')
@section ('title')
    FAQ
@endsection

@section ('subtitle')
    FAQ Update
@endsection

@section ('sidebar')
    <li>
        <a href="{{ url('/admin_dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
    </li>
    <li>
        <a href="{{ url('/admin_product') }}"><i class="fa fa-tag"></i> Product </a>
    </li>
    <li>
        <a href="{{ url('/admin_newOrders') }}"><i class="fa fa-bar-chart-o"></i> Orders </a>
    </li>
    <li>
        <a href="{{ url('/admin_customer') }}"><i class="fa fa-users"></i> Customer Account</a>
    </li>

    <li>
        <a href="{{ url('/admin_message') }}"><i class="fa fa-comments"></i> Messages </a>
    </li>
    <li>
        <a href="{{ url('/admin_faq') }}" class="active-menu"><i class="fa fa-edit"></i> FAQ Update </a>
    </li>

@endsection

@section ('content')
<div class="card">
    <h4 class="container green-text">New FAQ</h4>
    <div class="container card-content">
        {!! Form::open(array('route' => 'postFaq')) !!}
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">info</i>
                        <input id="icon_prefix" type="number" name="faq_number" class="validate" required>
                        <label for="icon_prefix">FAQ Number</label>
                    </div>
                    <div class="input-field col s8">
                        <i class="material-icons prefix">live_help</i>
                        <input id="question" type="text" name="faq_question" class="validate" required>
                        <label for="question">Question</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">chat</i>
                        <textarea id="textarea1" class="materialize-textarea" name="faq_answer" required></textarea>
                        <label for="textarea1">Answer</label>
                    </div>
                </div>
            </div>
        <button class="btn-floating btn-large waves-effect waves-light green" id="sendFAQ" type="submit" title="Add">
            <i class="material-icons">done</i>
        </button>

          <!-- {!! Form::submit('Send') !!} -->

        {!! Form::close() !!}
    </div>
</div>

<div class="card">
    <div class="card-content">
        <h4 class="blue-text center">All FAQs</h4>
        <ul class="collection">
        @foreach ($faqs as $faq)
        <li class="collection-item row " >
            <p class="title col s9">{{ $faq->faq_number }}. Q: {{ $faq->faq_question }}
            <br>A: {{ $faq->faq_answer }}</p>
            <span class="secondary-content col s3">
                {{ Form::open(['route' => ['delFaq', $faq->faq_number], 'method' => 'delete']) }}
                    <button class=" btn-floating btn-large waves-effect waves-light blue" id="sendFAQ" type="submit">
                        <i class="material-icons">delete</i>
                    </button>
                {{ Form::close() }}
            </span>
        </li>
        @endforeach
        </ul>

    </div>
</div>





@endsection
        <!-- <div class="container">
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


 -->
