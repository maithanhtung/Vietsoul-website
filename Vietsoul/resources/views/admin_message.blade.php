@extends ('layouts.admin_template')
@section ('title')
    Message
@endsection

@section ('subtitle')
    Visitor's messages
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
        <a href="{{ url('/admin_message') }}" class="active-menu"><i class="fa fa-comments"></i> Messages </a>
    </li>
    <li>
        <a href="{{ url('/admin_faq') }}"><i class="fa fa-edit"></i> FAQ Update </a>
    </li>


@endsection


@section ('content')
    <div class="card">
        <div class="container card-content">
        <h4 class="deep-orange-text"> All Messages</h4>
            <span class="card-content">
                @foreach ($messages as $message)
                    <div class="panel panel-info">
                        <div class="card-title panel-heading">
                            FROM: {{ $message->message_name }} - {{ $message->message_email }}
                        </div>
                        <div class="panel-body">
                            "{{ $message->message_content }}"
                        </div>
                    </div>
                @endforeach
            </span>
        </div>
    </div>
@endsection
<!--
    @foreach ($messages as $message)
    {{ $message->message_name }}
    <br>
    {{ $message->message_email }}
    <br>
   {{ $message->message_content }}
    <br>
    	@endforeach



