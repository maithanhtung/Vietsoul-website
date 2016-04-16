@extends ('layouts.admin_template')
@section ('title')
    DASHBOARD
@endsection

@section ('subtitle')
    bla bla
@endsection

@section ('sidebar')
    <li>
        <a href="{{ url('/admin_dashboard') }}" class="active-menu"><i class="fa fa-dashboard"></i> Dashboard</a>
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
        <a href="{{ url('/admin_message') }}"><i class="fa fa-comments"></i> Messages </a>
    </li>
    <li>
        <a href="{{ url('/admin_faq') }}"><i class="fa fa-edit"></i> FAQ Update </a>
    </li>

@endsection

@section ('content')

<!-- VScards for counting new thing start -->
    <div class="card row">

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 animated pulse">
            <a href="{{ url('/admin_message') }}">
                <div class="card VSblue summary-inline">
                    <div class="VScard-body">
                        <i class="icon fa fa-comments fa-4x"></i>
                        <div class="VScard-content">
                            <div class="title"> {{ $message }} </div>
                            <div class="sub-title">New Messages</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 animated pulse">
            <a href="{{ url('/admin_newOrders') }}">
                <div class="card VSyellow summary-inline">
                    <div class="VScard-body">
                        <i class="icon fa fa-bar-chart-o fa-4x"></i>
                        <div class="VScard-content">
                            <div class="title"> {{ $order }} </div>
                            <div class="sub-title">New Orders</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 animated pulse">
            <a href="{{ url('/admin_customer') }}">
                <div class="card VSgreen summary-inline">
                    <div class="VScard-body">
                        <i class="icon fa fa-users fa-4x"></i>
                        <div class="VScard-content">
                            <div class="title"> {{ $user }} </div>
                            <div class="sub-title">New Customers</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 animated pulse">
            <a href="{{ url('/admin_product') }}">
                <div class="card VSred summary-inline">
                    <div class="VScard-body">
                        <i class="icon fa fa-tag fa-4x"></i>
                        <div class="VScard-content">
                            <div class="title"> {{ $total }} </div>
                            <div class="sub-title">New Products</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>

    </div>
<!-- VScards for counting new thing end -->

<!-- chart -->
    <div class="card col-sm-3">
        <div class="card-image waves-effect waves-block waves-light">
            <canvas id="vs-chart" width="400" height="400"></canvas>
        </div>
        <div class="card-content" align="center">
            <span class="card-title activator grey-text text-darken-4">Total: {{ $total }} Products</span>
        </div>

        <script>
            var vsChart = document.getElementById("vs-chart").getContext("2d");
            var options = {
                scaleLineWidth: 1,
                showScale: true,
                responsive: true,
                scaleFontSize: 20
            };

            var data = [
                {
                    value: parseFloat({{ $percentclot }}),
                    color:"#e53935",
                    highlight: "#ffcdd2",
                    label: "Clothing"
                },
                {
                    value: parseFloat({{ $percentacc }}),
                    color: "#d81b60",
                    highlight: "#f8bbd0",
                    label: "Accessories"
                },
                {
                    value: parseFloat({{ $percenttoy }}),
                    color: "#8e24aa",
                    highlight: "#e1bee7",
                    label: "Toys"
                },
                {
                    value: parseFloat({{ $percentoth }}),
                    color: "#5e35b1 ",
                    highlight: "#d1c4e9",
                    label: "Others"
                },
                {
                    value: parseFloat({{ $percentart }}),
                    color: "#3949ab",
                    highlight: "#c5cae9",
                    label: "Artworks"
                }
            ];

            var myDoughnutChart = new Chart(vsChart).Doughnut(data,options);
        </script>
    </div>

    <div class="card col-sm-3">
        <div class="card-image waves-effect waves-block waves-light">
            <canvas id="vs-pie-chart" width="400" height="400"></canvas>
        </div>
        <div class="card-content" align="center">
            <span class="card-title activator grey-text text-darken-4">Best Sold: {{ $bestproduct}}</span>
        </div>

        <script>
            var vsPieChart = document.getElementById("vs-pie-chart").getContext("2d");
            var options = {
                scaleLineWidth: 1,
                showScale: true,
                responsive: true,
                scaleFontSize: 20
            };

            var data = [
                {
                    value: parseFloat({{ $bestsold }}),
                    color:"#039be5 ",
                    highlight: "#4fc3f7",
                    label: "{{ $bestproduct}}"
                },
                {
                    value: 100 - parseFloat({{ $bestsold }}),
                    color: "#b3e5fc",
                    highlight: "#e1f5fe",
                    label: "Other Items"
                }
            ];

            var myPieChart = new Chart(vsPieChart).Pie(data,options);
        </script>
    </div>

    <div class="card col-md-5 db-table">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th data-field="sold">Total Sold</th>
                    <th data-field="profit">Profit</th>
                    <th data-field="cost">Cost</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td> $ {{ $sold }} </td>
                    <td> $ {{ $profit}} </td>
                    <td> $ {{ $cost }}</td>
                </tr>
            </tbody>
        </table>
    </div>


<!-- end chart -->

    <div class="card col-md-5 db-table">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th data-field="name">Name</th>
                    <th data-field="amount">Amount</th>
                    <th data-field="percentage">Percentage</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td> Clothing </td>
                    <td> {{ $numclot }} </td>
                    <td> {{ $percentclot }}% </td>
                </tr>
                <tr>
                    <td> Accessories</td>
                    <td> {{ $numacc }} </td>
                    <td> {{ $percentacc }}% </td>
                </tr>
                <tr>
                    <td> Toys </td>
                    <td> {{ $numtoy }} </td>
                    <td> {{ $percenttoy }}% </td>
                </tr>
                <tr>
                    <td> Artwork </td>
                    <td> {{ $numart }} </td>
                    <td> {{ $percentart }}% </td>
                </tr>
                <tr>
                    <td> Others </td>
                    <td> {{ $numoth }} </td>
                    <td> {{ $percentoth }}% </td>
                </tr>

            </tbody>
        </table>
    </div>

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
    Cost: {{ $cost }} USD
    <br>
    Bestproduct : {{ $bestproduct}}, take {{ $bestsold }}% of total sold products
    <br>




    <br>
    Total : {{ $total }} product(s)
    <br>
    Clothing : {{ $numclot }} product(s) , {{ $percentclot }}% of total products
    <br>
    Accessories : {{ $numacc }} product(s) , {{ $percentacc }}% of total products
    <br>
    Toys : {{ $numtoy }} product(s) , {{ $percenttoy }}% of total products
    <br>
    Artworks : {{ $numart }} product(s) , {{ $percentart }}% of total products
    <br>
    Others : {{ $numoth }} product(s) , {{ $percentoth }}% of total products
    <br> -->
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




