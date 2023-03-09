<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="app_assets/css/style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="@@class">

<div id="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
</div>

<main class="py-4">
   @yield('content')
</main>

<script src="app_assets/vendor/jquery/jquery.min.js"></script>
<script src="app_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="app_assets/js/scripts.js"></script>

</body>
</html>
