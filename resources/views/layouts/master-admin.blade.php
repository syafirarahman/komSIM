<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="{{asset('asset/dist/img/ugm.png')}}" />
  <title>SIDOKOM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('asset/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('asset/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- Style -->
  <link rel="stylesheet" href="{{asset('asset/dist/css/style.css') }}">
  <!-- DataTable -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo greener">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>K</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>KOMSI</b></span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top greener">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Account -->
            <li>
              <a>
              <i class="fa fa-user"></i> {{ Auth::user()->name }}
            </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="@yield('Astatus1')">
            <a href="{{url('/admin')}}">
            <i class="fa fa-folder"></i> <span>Penyimpanan</span>
          </a>
          </li>
          <li class="@yield('Astatus2')">
            <a href="{{ url('/admin/pengguna') }}">
            <i class="fa fa-users"></i> <span>Pengguna</span>
          </a>
          </li>
          <li class="@yield('Astatus3')">
            <a href="{{ url('/admin/log') }}">
              <i class="fa fa-history"></i> <span>Log</span>
            </a>
          </li>
          <li class="@yield('Astatus4')">
            <a href="{{ url('/admin/ubahPassword') }}">
              <i class="fa fa-lock"></i> <span>Ubah Password</span>
            </a>
          </li>
          <li>
            <a data-target="#modal-keluar" data-toggle="modal">
                <i class="fa fa-arrow-left"></i> <span>Logout</span>
              </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      @yield('content-header')

      <!-- Main Content -->
      @yield('content')

    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs"></div>
      <strong>Build by <a href="https://adminlte.io">Admin-LTE</a>.</strong>
    </footer>
  </div>
  <div class="modal modal-default fade" id="modal-keluar">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Yakin Anda ingin keluar?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline logout-no pull-left" data-dismiss="modal">Tidak</button>
          <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <button type="button" class="btn btn-outline logout-yes">Ya</button>
              <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- jQuery 3 -->
  <script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('asset/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);

  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- Morris.js charts -->
  <script src="{{asset('asset/bower_components/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('asset/bower_components/morris.js/morris.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  <!-- jvectormap -->
  <script src="{{asset('asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{asset('asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('asset/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('asset/bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('asset/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- datepicker -->
  <script src="{{asset('asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <!-- Slimscroll -->
  <script src="{{asset('asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('asset/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('asset/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('asset/dist/js/pages/dashboard.js')}}"></script>
  <!-- asset for demo purposes -->
  <script src="{{asset('asset/dist/js/demo.js')}}"></script>
  <!-- Data Table -->
  <script src="{{asset('asset/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
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
  <script>
    $(function () {

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })

    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })

  </script>
  <script>
    $(function () {

    /* ADDING EVENTS */
    var currColor1 = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser1 = $('#color-chooser1-btn')
    $('#color-chooser1 > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor1 = $(this).css('color')
      //Add color effect to button
      $('#add-new-event1').css({ 'background-color': currColor1, 'border-color': currColor1 })
    })
    
    $('#add-new-event1').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event1').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor1,
        'border-color'    : currColor1,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events1').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })

  </script>
</body>

</html>