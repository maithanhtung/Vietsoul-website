<!DOCTYPE html>
<html>
    
    <body>
    @foreach ($messages as $message) 
    {{ $message->message_name }}
    <br>
    {{ $message->message_email }}
    	@endforeach
    </body>
    </html>