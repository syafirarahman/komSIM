<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('asset/dist/img/ugm.png')}}" />

    <title>SIDOKOM</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
</head>
<body class="hold-transition skin-blue login-page layout-top-nav">
    
        <header class="main-header">
        <nav class="navbar navbar-static-top logon">
            <img src="{{asset('asset/dist/img/SIDOKOMSI.svg')}}" alt="    ">
            </nav>
        </header>

        <div class="button-content">
                <div class=" btn-group-lg">
                    @if (Route::has('login')) @if (Auth::check())
                    <a href="{{ url('/home') }}"><button type="submit" class=" btn btn-success yellow">Home</button></a>
                    @else
                    <a href="{{ url('/home') }}"><button type="submit" class=" btn btn-success yellow ">Login</button></a>
                    <a href="{{ url('/register') }}"><button type="submit" class=" btn btn-success yellow">Register</button></a> @endif @endif
            </div>
        </div>
       

        <div class="img-bg">
            <div class=" row">
                <div class=" col-md-4">
                    <img src="{{asset('asset/dist/img/SIDO1.png')}}" alt="" class="bg">
                </div>
                <div class=" col-md-4">
                    <img src="{{asset('asset/dist/img/SIDO2.png')}}" alt="" class="bg">
                </div>
                <div class=" col-md-4">
                    <img src="{{asset('asset/dist/img/SIDO1.png')}}" alt="" class="bg">
                </div>
            </div>
        </div>
  
</body>

</html>
{{-- @if (Route::has('login'))
<div class="top-right links">
    @if (Auth::check())
    <a href="{{ url('/home') }}">Home</a> @else
    <a href="{{ url('/login') }}">Login</a>
    <a href="{{ url('/register') }}">Register</a> @endif
</div>
@endif --}}
