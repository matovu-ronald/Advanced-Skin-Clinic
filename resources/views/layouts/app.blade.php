<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Hackshade Techs">

    <title>{{ config('app.name') }} | @yield('title') </title>

    <meta name="description" content="@yield('desc')">
    <meta name="keywords" content="@yield('keywords')">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('css')

</head>
<body>


<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header -->
    @include('includes.header')


    <!--Main Slider-->
    @if(request()->is('/'))
        @include('includes.slider')
    @endif

    @yield('content')

    <!--Main Footer-->
    @include('includes.footer')


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>

    <script src="{{ asset('js/all.js') }}" defer></script>

    @yield('js')

</body>
</html>
