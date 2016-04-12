@extends ('layouts.admin_template')
@section ('title')
    Message
@endsection

@section ('subtitle')
    Customer messages
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
        <a href="{{ url('/admin_message') }}" class="active-menu"><i class="fa fa-table"></i> Messages </a>
    </li>
    <li>
        <a href="{{ url('/admin_faq') }}"><i class="fa fa-edit"></i> FAQ Update </a>
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
   @foreach ($messages as $message)
    {{ $message->message_name }}
    <br>
    {{ $message->message_email }}
    <br>
   {{ $message->message_content }}
    <br>
        @endforeach

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



