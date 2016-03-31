<!DOCTYPE html>
<html>
    
    <body>
    @foreach ($messages as $message) 
    {{ $message->message_name }}
    <br>
    {{ $message->message_email }}
    <br>
   {{ $message->message_content }}
    <br>
    	@endforeach
    
    
    </body>
    </html>