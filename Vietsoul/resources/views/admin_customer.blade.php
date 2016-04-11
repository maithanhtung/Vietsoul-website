@extends ('layouts.admin_template')
@section ('title')
    Customer
@endsection

@section ('subtitle')
    All customer
@endsection

@section ('content')
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

@endsection

   <!--  <h3>Customer</h3>
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
        @endforeach -->


