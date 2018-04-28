<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Required for CSRF protection -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Nate Jackemeyer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet" type="text/css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body id="nate-proj-app-container">

        <!-- Begin Vuejs app -->
        <main id="app" class="main-container">
            @yield('content')
        </main>
        

        @section('specific-scripts')
        @show

    </body>
    <script type="text/javascript" src="/js/app.js"></script>
</html>
