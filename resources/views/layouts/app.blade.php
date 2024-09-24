<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon icon -->    
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logo.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    
</head>
<body class="dashboard dark">
    <div id="app">        
        <div class="grid min-h-screen w-full md:grid-cols-[220px_1fr] lg:grid-cols-[280px_1fr]">
            <div class="hidden border-r bg-muted/40 md:block">
                <main-layout-prefix />        
            </div>
            <div class="flex flex-col">
                <div>
                   <header-nav /> 
                </div>  
                <div class="py-2 md:py-3 p-2 sm:px-3">                                   
                 @yield('content')
                </div>
            </div>
        </div>
   </div>
</body>
<script>
    window.user = @json(auth()->user());
</script>
</html>
