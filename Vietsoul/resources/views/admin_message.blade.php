@extends ('layouts.admin_template')
@section ('title')
    Message
@endsection

@section ('subtitle')
    Customer messages
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



