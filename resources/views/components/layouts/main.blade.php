<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Start cookieyes banner -->
     <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/27965f1813055c4b889e9ff5/script.js"></script> 
     <!-- End cookieyes banner -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Title-->
    <title>@yield('title', 'Tatrzański Raj')</title>
    <meta name="description" content='@yield('description')'>
    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />
    <!--Favicons-->
    @include('partials.favicon')
    <!--Facebook Meta-->
    @include('partials.facebook_meta')

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    {!! htmlScriptTagJsApi() !!}
</head>

<body>
    <!--NAVIGATION-->
    @include('shared.mobile_menu')
    @include('shared.navbar')

    <!--PRELOADER-->
    @include('shared.preloader')



    {{ $slot }}




    <!--FOOTER-->
    @include('shared.footer')
    @include('shared.mobile_buttons')
    <!--SCRIPTS-->
    



</body>

</html>
