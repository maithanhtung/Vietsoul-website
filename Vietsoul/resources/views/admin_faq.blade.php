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
        <a href="{{ url('/admin_product') }}"><i class="fa fa-desktop"></i> Product </a>
    </li>
    <li>
        <a href="{{ url('/admin_newOrders') }}"><i class="fa fa-bar-chart-o"></i> Orders </a>
    </li>
    <li>
        <a href="{{ url('/admin_customer') }}"><i class="fa fa-qrcode"></i> Customer Account</a>
    </li>

    <li>
        <a href="{{ url('/admin_message') }}"><i class="fa fa-table"></i> Messages </a>
    </li>
    <li>
        <a href="{{ url('/admin_faq') }}" class="active-menu"><i class="fa fa-edit"></i> FAQ Update </a>
    </li>

    <li>
        <a href="#"><i class="fa fa-sitemap"></i> Bla<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="#">bla</a>
            </li>
            <li>
                <a href="#">bla</a>
            </li>
            <li>
                <a href="#">bla<span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                    <li>
                        <a href="#"> Link</a>
                    </li>
                    <li>
                        <a href="#"> Link</a>
                    </li>
                    <li>
                        <a href="#"> Link</a>
                    </li>

                </ul>

            </li>
        </ul>
    </li>
    <li>
        <a class="active-menu" href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
    </li>
@endsection

@section ('content')
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
