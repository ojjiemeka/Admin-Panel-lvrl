<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0;">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{asset('build/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/libs/libs/bootstrap-editable/css/bootstrap-editable.css')}}">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=Nunito">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    {{-- <script src="{{asset('build/assets/app.js')}}"></script> --}}

    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']); --}}


</head>

<body data-topbar="dark" data-layout="horizontal">
    <div id="layout-wrapper">
        @yield('content')
    </div>

     <!-- JAVASCRIPT -->

     <!-- App js -->
     
     <script src="{{asset('build/assets/libs/jquery/jquery.min.js')}}"></script>
     <script src="{{asset('build/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('build/assets/libs/simplebar/simplebar.min.js')}}"></script>
     <script src="{{asset('build/assets/libs/node-waves/waves.min.js')}}"></script>
     <script src="{{asset('build/assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
     <script src="{{asset('build/assets/libs/pages/form-wizard.init.js')}}"></script>
     <script src="{{asset('build/assets/libs/bootstrap-editable/js/index.js')}}"></script>
     <script src="{{asset('build/assets/libs/select2/js/select2.min.js')}}"></script>
     <script src="{{asset('build/assets/pages/form-xeditable.init.js')}}"></script>
     <script src="{{asset('build/assets/pages/form-advanced.init.js')}}"></script>
     {{-- <script src="{{asset('build/assets/libs/')}}"></script> --}}
</body>

</html>
