<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <link href="{!! asset('/css/bootstrap.css') !!}" rel="stylesheet">
    <link href="{!! asset('/css/simple-sidebar.css') !!}" rel="stylesheet">
    <link href="{!! asset('/font-awesome-4.3.0/css/font-awesome.min.css') !!}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
    <nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header fixed-brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                    </button>
                    <a class="navbar-brand" href="#"></i>BAPPEDA JATENG</a>      
                </div><!-- navbar-header-->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active" ><button class="btn btn-default navbar-btn" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button></li>
                            </ul>
                    <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-off"></span>
                                            &nbsp;&nbsp;Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </ul>

                </div><!-- bs-example-navbar-collapse-1 -->
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                <li class="active">
                    <a href="{{ url('/dashboard') }}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Dashboard</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-upload fa-stack-1x"></i></span> Input Data</a>
                    <ul class="nav-pills nav-stacked">
                        <li><a href="{{ url('/dashboard/tim/kepala-keluarga/create') }}" class="text-left"><span class="glyphicon glyphicon-user col-xs-pull-1"></span>Kepala Keluarga</a></li>
                        <li><a href="{{ url('/dashboard/tim/individu/create') }}" class="text-left"><span class="glyphicon glyphicon-user col-xs-pull-1"></span>Individu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list-alt fa-stack-1x"></i></span> Lihat Data</a>
                    <ul class="nav-pills nav-stacked">
                        <li><a href="{{ url('/dashboard/tim/kepala-keluarga/view') }}" class="text-left"><span class="glyphicon glyphicon-user col-xs-pull-1"></span>Kepala Keluarga</a></li>
                        <li><a href="{{ url('/dashboard/tim/individu/view') }}" class="text-left"><span class="glyphicon glyphicon-user col-xs-pull-1"></span>Individu</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                @yield('content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{!! asset('/js/jquery-1.11.2.min.js') !!}"></script>
    <script src="{!! asset('/js/sidebar_menu.js') !!}"></script>
    <script src="{!! asset('/js/bootstrap.js') !!}"></script>
</body>

</html>
