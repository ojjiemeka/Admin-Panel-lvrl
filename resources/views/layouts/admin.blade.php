<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

    @vite(['resources/sass/app.scss', 'resources/js/app.js']);


</head>

<body data-topbar="dark" data-layout="horizontal">
    <div id="layout-wrapper">
        @yield('content')
    </div>

     <!-- JAVASCRIPT -->

     <!-- App js -->
     {{-- <script src="resources/js/app.js"></script> --}}
</body>

</html>
