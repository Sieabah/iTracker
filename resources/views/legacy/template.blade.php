<!DOCTYPE html>
<html ng-app="itracker">
<head>
    <base href="/itracker/dashboard/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="{{asset('legacy/css/itracker.css')}}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('legacy/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('legacy/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('legacy/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('legacy/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('legacy/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('legacy/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('legacy/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('legacy/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('legacy/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <title>UMBC SGA iTracker</title>

    <script src="{{asset('js/core.js')}}"></script>
</head>
<body class="hold-transition skin-yellow sidebar-mini" ng-controller="MainController">
<div class="wrapper">
    @include('templates.umbc.header')

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('media/sga-logo-IT.png')}}" class="img-circle" alt="User Image">
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                </div>
            </form> <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="itracker/">
                        <i class="fa fa-home"></i> <span>Home</span> <!-- <i class="fa fa-angle-left pull-right"></i> -->
                    </a>
                </li>
                <li class="treeview">
                    <a class="no-link">
                        <i class="fa fa-edit"></i>
                        <span>Projects</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="itracker/projects/by-name/"><i class="fa fa-circle-o"></i>Projects By Name</a></li>
                        <li><a href="itracker/projects/by-dept/"><i class="fa fa-circle-o"></i>Projects By Department</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a class="no-link">
                        <i class="fa fa-users"></i>
                        <span>People</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="itracker/people/by-name/"><i class="fa fa-circle-o"></i>Everyone By Name</a></li>
                        <li><a href="itracker/people/by-dept/"><i class="fa fa-circle-o"></i>Everyone By Department</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a class="no-link">
                        <i class="fa fa-briefcase"></i>
                        <span>Departments</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li ng-repeat="group in main.groups | orderBy: 'name'">
                            <a href="itracker/departments/@{{group.group_href}}/">
                                <i class="fa fa-circle-o"></i>@{{group.name}}
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="http://sga.umbc.edu/getinvolved/" target="_blank">
                        <i class="fa fa-question"></i>
                        <span>How Do I Get Involved?</span>
                    </a>
                </li>
                <li>
                    <a href="https://umbcsga.slack.com/" target="_blank">
                        <i class="fa fa-slack"></i>
                        <span>UMBC SGA on Slack</span>
                    </a>
                </li>
                <li>
                    <a href="http://sga.umbc.edu/contact/" target="_blank">
                        <i class="fa fa-phone"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
                <li>
                    <a href="http://sga.umbc.edu/" target="_blank">
                        <i class="fa fa-arrow-left"></i>
                        <span>To the UMBC SGA Website</span>
                    </a>
                </li>
                <li class="header">SHARE THIS ON SOCIAL MEDIA</li>
                <li>
                    <a class="no-link" onclick="FacebookShare();">
                        <i class="fa fa-facebook-square"></i>
                        <span>Share On Facebook!</span>
                    </a>
                </li>
                <li>
                    <a class="no-link" onclick="TwitterShare();">
                        <i class="fa fa-twitter-square"></i>
                        <span>Share on Twitter!</span>
                    </a>
                </li>
            </ul>
        </section>  <!-- /.sidebar -->
    </aside>

    <!-- Main content -->
    <div data-ng-view></div>

    @include('templates.umbc.footer')

    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('legacy/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('legacy/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('legacy/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('legacy/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('legacy/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('legacy/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('legacy/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset('legacy/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('legacy/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('legacy/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('legacy/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('legacy/plugins/fastclick/fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('legacy/dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('legacy/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('legacy/dist/js/demo.js')}}"></script>

<!-- SOCIAL MEDIA -->
<script>
    function FacebookShare() {
        var fb = "https://www.facebook.com/sharer/sharer.php?u=";
        window.open(fb.concat(document.URL));
    }

    function TwitterShare() {
        var tw = "https://twitter.com/home?status=Check%20this%20out%20on%20the%20UMBC%20SGA%20iTracker!%20";
        window.open(tw.concat(document.URL));
    }
</script>

</body>
</html>