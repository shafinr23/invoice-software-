<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>mamurjor</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset("dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("dashboard/bower_components/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("dashboard/bower_components/Ionicons/css/ionicons.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("dashboard/dist/css/AdminLTE.min.css")}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset("dashboard/dist/css/skins/_all-skins.min.css")}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset("dashboard/bower_components/morris.js/morris.css")}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset("dashboard/bower_components/jvectormap/jquery-jvectormap.css")}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset("dashboard/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset("dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css")}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset("dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">
  

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">
  <!-- Theme style -->
 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
     
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b> Mamurjor Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            
          </li>
		  
		    <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('imagurl_get')}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{Session::get('logedin')}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset("imagurl_get")}}" class="img-circle" alt="User Image">

                <p>
                  {{Session::get('logedin')}} - Web Developer
                  <small>Member since Nov. 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
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
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <?php echo $img = Session::get('imagurl_get'); ?>
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{Session::get(".$img.")}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Session::get('logedin')}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-user"></i>All Users</a></li>
            <li><a href="general.html"><i class="fa fa-user"></i> Add New User</a></li>
          </ul>
        </li>
       
       
	  
	  </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.0
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="https://mamurjor.com">mamurjor</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset("dashboard/bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset("dashboard/bower_components/jquery-ui/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset("dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- Morris.js charts -->
<script src="{{asset("dashboard/bower_components/raphael/raphael.min.js")}}"></script>
<script src="{{asset("dashboard/bower_components/morris.js/morris.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("dashboard/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js")}}"></script>
<!-- jvectormap -->
<script src="{{asset("dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
<script src="{{asset("dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset("dashboard/bower_components/jquery-knob/dist/jquery.knob.min.js")}}"></script>
<!-- daterangepicker -->
<script src="{{asset("dashboard/bower_components/moment/min/moment.min.js")}}"></script>
<script src="{{asset("dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.js")}}"></script>
<!-- datepicker -->
<script src="{{asset("dashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset("dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
<!-- Slimscroll -->
<script src="{{asset("dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("dashboard/bower_components/fastclick/lib/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("dashboard/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset("dashboard/dist/js/pages/dashboard.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("dashboard/dist/js/demo.js")}}"></script>


<!-- Bootstrap 3.3.7 -->
<script src="{{asset("dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- DataTables -->
<script src="{{asset("dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("dashboard/bower_components/fastclick/lib/fastclick.js")}}"></script>


<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
