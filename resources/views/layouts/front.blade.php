<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>iScout - Job Board HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bootstrap-submenu.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/leaflet.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/front/css/map.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/front/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/front/css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/front/css/slick.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('assets/front/css/skins/red.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900%7CRaleway:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="{{ ('assets/front/ie-emulation-modes-warning.js') }}"></script>

@livewireStyles
</head>
<body>
<div class="page_loader"></div>

<!-- Main header start -->
@include('layouts.partiales.header')
<!-- Main header end -->

<!-- Banner start -->
@yield('content')
<!-- Intro end -->

<!-- Footer start -->
@include('layouts.partiales.footer')
<!-- Footer end -->

@livewireScripts
<script src="{{asset ('assets/front/js/jquery-2.2.0.min.js') }}"></script>
<script src="{{asset ('assets/front/js/popper.min.js') }}"></script>
<script src="{{asset ('assets/front/js/bootstrap.min.js') }}"></script>
<script  src="{{asset ('assets/front/js/bootstrap-submenu.js') }}"></script>
<script  src="{{asset ('assets/front/js/rangeslider.js') }}"></script>
<script  src="{{asset ('assets/front/js/jquery.mb.YTPlayer.js') }}"></script>
<script  src="{{asset ('assets/front/js/bootstrap-select.min.js') }}"></script>
<script  src="{{asset ('assets/front/js/jquery.easing.1.3.js') }}"></script>
<script  src="{{asset ('assets/front/js/jquery.scrollUp.js') }}"></script>
<script  src="{{asset ('assets/front/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script  src="{{asset ('assets/front/js/leaflet.js') }}"></script>
<script  src="{{asset ('assets/front/js/leaflet-providers.js') }}"></script>
<script  src="{{asset ('assets/front/js/leaflet.markercluster.js') }}"></script>
<script  src="{{asset ('assets/front/js/moment.min.js') }}"></script>
<script  src="{{asset ('assets/front/js/daterangepicker.min.js') }}"></script>
<script  src="{{asset ('assets/front/js/dropzone.js') }}"></script>
<script  src="{{asset ('assets/front/js/slick.min.js') }}"></script>
<script  src="{{asset ('assets/front/js/jquery.filterizr.js') }}"></script>
<script  src="{{asset ('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
<script  src="{{asset ('assets/front/js/jquery.countdown.js') }}"></script>
<script  src="{{asset ('assets/front/js/maps.js') }}"></script>
<script  src="{{asset ('assets/front/js/app.js') }}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="{{asset ('assets/front/js/ie10-viewport-bug-workaround.js') }}"></script>
<!-- Custom javascript -->
<script  src="{{asset ('assets/front/js/ie10-viewport-bug-workaround.js') }}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="assets/js/script.js"></script>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
