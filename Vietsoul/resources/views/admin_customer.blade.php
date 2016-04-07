<!DOCTYPE html>
<html>
    
    <body>

    <h3>Customer</h3>
    @foreach ($users as $user) 
    Id: {{ $user->id }}
    <br>
    Name: {{ $user->name }}
    <br>
    Email: {{ $user->email }}
    <br>
    <a href="./admin_cusOrders/{{ $user->id }}"><button>View Customer's orders</button></a>
    <br>
    <br>
        @endforeach
    
    
    </body>
    </html>