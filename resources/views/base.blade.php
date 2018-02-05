<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Louminous House</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/gif" sizes="16x16">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <!-- ############################ CSS Files ########################### -->
    <!-- Bootstrap 3.3.5 -->
    {!! HTML::style('bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
    <!-- Ionicons -->
    {!! HTML::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
    <!-- Theme style -->
    {!! HTML::style('dist/css/AdminLTE.min.css') !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!! HTML::style('dist/css/skins/skin-purple-light.min.css') !!}
    <!-- iCheck -->
    {!! HTML::style('plugins/iCheck/flat/blue.css') !!}
    <!-- Morris chart -->
    {!! HTML::style('plugins/morris/morris.css') !!}
    <!-- jvectormap -->
    {!! HTML::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
    <!-- Date Picker -->
    {!! HTML::style('plugins/datepicker/datepicker3.css') !!}
    <!-- Daterange picker -->
    {!! HTML::style('plugins/daterangepicker/daterangepicker-bs3.css') !!}
    <!-- bootstrap wysihtml5 - text editor -->
    {!! HTML::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}

    <!-- ############################ Javascript Files ########################### -->
    <!-- jQuery 2.1.4 -->
    {!! HTML::script('plugins/jQuery/jQuery-2.1.4.min.js'); !!}
    <!-- jQuery UI 1.11.4 -->
    {!! HTML::script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js'); !!}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    {!! HTML::script('bootstrap/js/bootstrap.min.js'); !!}
    <!-- Morris.js charts -->
    {!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'); !!} {!! HTML::script('plugins/morris/morris.min.js'); !!}
    <!-- Sparkline -->
    {!! HTML::script('plugins/sparkline/jquery.sparkline.min.js'); !!}
    <!-- jvectormap -->
    {!! HTML::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); !!} {!! HTML::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); !!}
    <!-- jQuery Knob Chart -->
    {!! HTML::script('plugins/knob/jquery.knob.js'); !!}
    <!-- daterangepicker -->
    {!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js'); !!} {!! HTML::script('plugins/daterangepicker/daterangepicker.js'); !!}
    <!-- datepicker -->
    {!! HTML::script('plugins/datepicker/bootstrap-datepicker.js'); !!}
    <!-- Bootstrap WYSIHTML5 -->
    {!! HTML::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); !!}
    <!-- Slimscroll -->
    {!! HTML::script('plugins/slimScroll/jquery.slimscroll.min.js'); !!}
    <!-- FastClick -->
    {!! HTML::script('plugins/fastclick/fastclick.min.js'); !!}
    <!-- AdminLTE App -->
    {!! HTML::script('dist/js/app.min.js'); !!}


</head>

<body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Louminous</b>House</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                              <span class="hidden-xs">Ma. Lourraine Hernandez</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        Ma. Lourraine Hernandez - Administrator
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class="treeview">
                        <a href="#">
                <i class="fa fa-smile-o"></i>
                <span>Services</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/layout/top-nav.html"><i class="fa fa-list-ol"></i> List</a></li>
                            <li><a href="pages/layout/boxed.html"><i class="fa fa-keyboard-o"></i> Types</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-gift"></i> <span>Promos</span></a></li>
                    <li><a href="#"><i class="fa fa-coffee"></i> <span>Products</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        @extends('footer')

    </div>
    <!-- ./wrapper -->

</body>

</html>