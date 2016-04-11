@extends ('layouts.admin_template')
@section ('title')
    DASH BOARD
@endsection

@section ('subtitle')
bla bla
@endsection

@section ('content')
 Message count: {{ $message }}
    <br>
    Order count: {{ $order }}
    <br>
    User count: {{ $user }}
    <br>
    Sold total: {{ $sold }} USD
    <br>
    Profit: {{ $profit}} USD
    <br>
    Cost: {{ $cost }} USD

@endsection



   <!--
    Message count: {{ $message }}
    <br>
    Order count: {{ $order }}
    <br>
    User count: {{ $user }}
    <br>
    Sold total: {{ $sold }} USD
    <br>
    Profit: {{ $profit}} USD
    <br>
    Cost: {{ $cost }} USD -->




