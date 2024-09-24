<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logo.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>

<main>
   @yield('content')
</main>

<script src="app_assets/vendor/jquery/jquery.min.js"></script>
<script src="app_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="app_assets/js/scripts.js"></script>

</body>
</html>
