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

<body class="hold-transition skin-blue login-page layout-top-nav">
    
        <header class="main-header">
            <nav class="navbar navbar-static-top logon">
                <svg width="200" height="36" viewBox="0 0 249 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.7422 26.0469C19.7422 24.7188 19.2734 23.7031 18.3359 23C17.3984 22.2812 15.7109 21.5312 13.2734 20.75C10.8359 19.9531 8.90625 19.1719 7.48438 18.4062C3.60938 16.3125 1.67188 13.4922 1.67188 9.94531C1.67188 8.10156 2.1875 6.46094 3.21875 5.02344C4.26562 3.57031 5.75781 2.4375 7.69531 1.625C9.64844 0.8125 11.8359 0.40625 14.2578 0.40625C16.6953 0.40625 18.8672 0.851562 20.7734 1.74219C22.6797 2.61719 24.1562 3.85937 25.2031 5.46875C26.2656 7.07812 26.7969 8.90625 26.7969 10.9531H19.7656C19.7656 9.39062 19.2734 8.17969 18.2891 7.32031C17.3047 6.44531 15.9219 6.00781 14.1406 6.00781C12.4219 6.00781 11.0859 6.375 10.1328 7.10938C9.17969 7.82812 8.70312 8.78125 8.70312 9.96875C8.70312 11.0781 9.25781 12.0078 10.3672 12.7578C11.4922 13.5078 13.1406 14.2109 15.3125 14.8672C19.3125 16.0703 22.2266 17.5625 24.0547 19.3438C25.8828 21.125 26.7969 23.3438 26.7969 26C26.7969 28.9531 25.6797 31.2734 23.4453 32.9609C21.2109 34.6328 18.2031 35.4688 14.4219 35.4688C11.7969 35.4688 9.40625 34.9922 7.25 34.0391C5.09375 33.0703 3.44531 31.75 2.30469 30.0781C1.17969 28.4062 0.617188 26.4688 0.617188 24.2656H7.67188C7.67188 28.0312 9.92188 29.9141 14.4219 29.9141C16.0938 29.9141 17.3984 29.5781 18.3359 28.9062C19.2734 28.2188 19.7422 27.2656 19.7422 26.0469ZM39.0547 35H32.0234V0.875H39.0547V35ZM45.5938 35V0.875H56.0938C59.0938 0.875 61.7734 1.55469 64.1328 2.91406C66.5078 4.25781 68.3594 6.17969 69.6875 8.67969C71.0156 11.1641 71.6797 13.9922 71.6797 17.1641V18.7344C71.6797 21.9062 71.0234 24.7266 69.7109 27.1953C68.4141 29.6641 66.5781 31.5781 64.2031 32.9375C61.8281 34.2969 59.1484 34.9844 56.1641 35H45.5938ZM52.625 6.57031V29.3516H56.0234C58.7734 29.3516 60.875 28.4531 62.3281 26.6562C63.7812 24.8594 64.5234 22.2891 64.5547 18.9453V17.1406C64.5547 13.6719 63.8359 11.0469 62.3984 9.26562C60.9609 7.46875 58.8594 6.57031 56.0938 6.57031H52.625ZM104.844 18.7109C104.844 22.0703 104.25 25.0156 103.062 27.5469C101.875 30.0781 100.172 32.0312 97.9531 33.4062C95.75 34.7812 93.2188 35.4688 90.3594 35.4688C87.5312 35.4688 85.0078 34.7891 82.7891 33.4297C80.5703 32.0703 78.8516 30.1328 77.6328 27.6172C76.4141 25.0859 75.7969 22.1797 75.7812 18.8984V17.2109C75.7812 13.8516 76.3828 10.8984 77.5859 8.35156C78.8047 5.78906 80.5156 3.82812 82.7188 2.46875C84.9375 1.09375 87.4688 0.40625 90.3125 0.40625C93.1562 0.40625 95.6797 1.09375 97.8828 2.46875C100.102 3.82812 101.812 5.78906 103.016 8.35156C104.234 10.8984 104.844 13.8438 104.844 17.1875V18.7109ZM97.7188 17.1641C97.7188 13.5859 97.0781 10.8672 95.7969 9.00781C94.5156 7.14844 92.6875 6.21875 90.3125 6.21875C87.9531 6.21875 86.1328 7.14062 84.8516 8.98438C83.5703 10.8125 82.9219 13.5 82.9062 17.0469V18.7109C82.9062 22.1953 83.5469 24.8984 84.8281 26.8203C86.1094 28.7422 87.9531 29.7031 90.3594 29.7031C92.7188 29.7031 94.5312 28.7812 95.7969 26.9375C97.0625 25.0781 97.7031 22.375 97.7188 18.8281V17.1641Z" fill="#6CD152"/>
                    <path d="M119.539 19.1328L115.367 23.4688V35H110.867V0.875H115.367V17.75L130.531 0.875H135.969L122.539 15.9453L137.023 35H131.633L119.539 19.1328ZM166.461 19.0391C166.461 22.3828 165.898 25.3047 164.773 27.8047C163.648 30.2891 162.055 32.1875 159.992 33.5C157.93 34.8125 155.523 35.4688 152.773 35.4688C150.086 35.4688 147.703 34.8125 145.625 33.5C143.547 32.1719 141.93 30.2891 140.773 27.8516C139.633 25.3984 139.047 22.5625 139.016 19.3438V16.8828C139.016 13.6016 139.586 10.7031 140.727 8.1875C141.867 5.67188 143.477 3.75 145.555 2.42188C147.648 1.07813 150.039 0.40625 152.727 0.40625C155.461 0.40625 157.867 1.07031 159.945 2.39844C162.039 3.71094 163.648 5.625 164.773 8.14062C165.898 10.6406 166.461 13.5547 166.461 16.8828V19.0391ZM161.984 16.8359C161.984 12.7891 161.172 9.6875 159.547 7.53125C157.922 5.35937 155.648 4.27344 152.727 4.27344C149.883 4.27344 147.641 5.35937 146 7.53125C144.375 9.6875 143.539 12.6875 143.492 16.5312V19.0391C143.492 22.9609 144.312 26.0469 145.953 28.2969C147.609 30.5312 149.883 31.6484 152.773 31.6484C155.68 31.6484 157.93 30.5938 159.523 28.4844C161.117 26.3594 161.938 23.3203 161.984 19.3672V16.8359ZM179.023 0.875L190.18 28.7188L201.336 0.875H207.172V35H202.672V21.7109L203.094 7.36719L191.891 35H188.445L177.266 7.4375L177.711 21.7109V35H173.211V0.875H179.023ZM225.172 19.7891C221.312 18.6797 218.5 17.3203 216.734 15.7109C214.984 14.0859 214.109 12.0859 214.109 9.71094C214.109 7.02344 215.18 4.80469 217.32 3.05469C219.477 1.28906 222.273 0.40625 225.711 0.40625C228.055 0.40625 230.141 0.859375 231.969 1.76562C233.812 2.67188 235.234 3.92188 236.234 5.51562C237.25 7.10938 237.758 8.85156 237.758 10.7422H233.234C233.234 8.67969 232.578 7.0625 231.266 5.89062C229.953 4.70312 228.102 4.10938 225.711 4.10938C223.492 4.10938 221.758 4.60156 220.508 5.58594C219.273 6.55469 218.656 7.90625 218.656 9.64062C218.656 11.0312 219.242 12.2109 220.414 13.1797C221.602 14.1328 223.609 15.0078 226.438 15.8047C229.281 16.6016 231.5 17.4844 233.094 18.4531C234.703 19.4062 235.891 20.5234 236.656 21.8047C237.438 23.0859 237.828 24.5938 237.828 26.3281C237.828 29.0938 236.75 31.3125 234.594 32.9844C232.438 34.6406 229.555 35.4688 225.945 35.4688C223.602 35.4688 221.414 35.0234 219.383 34.1328C217.352 33.2266 215.781 31.9922 214.672 30.4297C213.578 28.8672 213.031 27.0938 213.031 25.1094H217.555C217.555 27.1719 218.312 28.8047 219.828 30.0078C221.359 31.1953 223.398 31.7891 225.945 31.7891C228.32 31.7891 230.141 31.3047 231.406 30.3359C232.672 29.3672 233.305 28.0469 233.305 26.375C233.305 24.7031 232.719 23.4141 231.547 22.5078C230.375 21.5859 228.25 20.6797 225.172 19.7891ZM248.445 35H243.945V0.875H248.445V35Z" fill="#666666"/>
                </svg>
            </nav>
        </header>
            <!-- Main Content -->
            @yield('content')


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
        <script src="{{asset('asset/bower_components/style.js')}}"></script>
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