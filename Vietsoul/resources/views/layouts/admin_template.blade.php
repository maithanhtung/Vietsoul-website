<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VietSoul Admin Page</title>
	<!-- Bootstrap Styles-->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- FontAwesome Styles-->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Animation Styles-->
    <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="{{ asset('assets/css/admin-styles.css') }}" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.min.js"></script>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/admin_dashboard') }}"><i class="fa fa-gift"></i> <strong> Viet Soul </strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ url('/client_logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>


        <!--/. NAV TOP END  -->

        <!-- /. NAV SIDE START -->
        <div class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                @yield('sidebar')

                </ul>

            </div>

        </div>
        <!-- /. NAV SIDE END -->

        <!-- /. PAGE WRAPPER START -->
        <div id="page-wrapper" >

            <div id="page-inner">
			    <div class="row">
                        <h1 class="page-header">
                            @yield('title')<small>@yield('subtitle')</small>
                        </h1>
                    <div>
                    @yield('content')
                    </div>
                </div>

                 <!-- /. ROW  -->
				 <footer><p> © 2016 LinhHangTung <a href="{{ url('/') }}">VietSoul Store</a></p></footer>
			</div>

        </div>
         <!-- /. PAGE WRAPPER END -->

    </div>
     <!-- /. WRAPPER  -->


    <!-- JS Scripts-->

    <!-- Compiled and minified JavaScript -->

    <!-- jQuery Js -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
      <!-- Bootstrap Js -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Metis Menu Js -->
    <script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
    <!-- Smooth Scroll -->
    <script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
      <!-- Custom Js -->
    <script src="{{ ('') }}assets/js/admin-scripts.js"></script>

</body>
</html>
