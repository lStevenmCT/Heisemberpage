<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="instyle, fashion, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
  
    <link rel="icon" type="image/png"  href="{{ asset('/images/logo.png') }}">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href={{ asset('css/style.css') }} />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HESMA - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>


    @yield('style')

</head>

<body>
    
    <div id="preloder">
        <div class="loader"></div>
    </div>
    @include('header')

    @yield('content')

{{-- 
    @include('footer') --}}


    @yield('script')
    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>
