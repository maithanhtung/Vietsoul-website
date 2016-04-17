@extends ('layouts.admin_template')

@section ('title')
    Customer
@endsection

@section ('subtitle')
    Client's Accounts
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
        <a href="{{ url('/admin_customer') }}" class="active-menu"><i class="fa fa-users"></i> Customer Account</a>
    </li>

    <li>
        <a href="{{ url('/admin_message') }}"><i class="fa fa-comments"></i> Messages </a>
    </li>
    <li>
        <a href="{{ url('/admin_faq') }}"><i class="fa fa-edit"></i> FAQ Update </a>
    </li>

@endsection

@section ('content')
<div class="card">
    <h5> Registered Information</h5>
    <div class="container card-content">
        <table>
            <thead>
                <tr>
                    <th data-field="id">ID</th>
                    <th data-field="name">Name</th>
                    <th data-field="price">Email</th>
                    <th>View This Customer's Order</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td> <a class="waves-effect blue btn" href="./admin_cusOrders/{{ $user->id }}">See Orders</a></td>
              <!--   <td>
                    <form action="#">
                        <p>
                            <input type="checkbox" id="$user"/>
                            <label for="$user">V.I.P</label>
                        </p>
                    </form>
                </td> -->
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>




</div>
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


