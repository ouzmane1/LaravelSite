<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('titre')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body>

<!-- debut header -->
<header class="header-area header-padding-2 sticky-bar header-res-padding clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                @include('layouts.logo')
            </div>
            <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                 @include('layouts.menu')
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                @include('layouts.header_right')
            </div>
        </div>
        @include('layouts.menu_mobile')
    </div>
</header>
<!-- fin header -->

{{-- <main>
@yield('contenue')
</main>
<hr> --}}

@yield('contenue')



<!-- debut footer area  -->
@include('layouts.footer')
<!-- fin footer area  -->

<!-- All JS is here
============================================ -->

<script src="{{asset('assets/js/vendor/jquery-v3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
