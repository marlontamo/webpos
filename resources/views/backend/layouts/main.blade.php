<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <title>{{ config('app.name', 'Laravel') }} - Admin Panel</title>

        <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}"/>
        
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <!-- select 2 -->
        <link rel="stylesheet" href="{{ asset('/css/select2.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/css/fontawesome.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('/css/ion.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('/css/AdminLTE.min.css') }}">
        <!-- css/skins. -->
        <link rel="stylesheet" href="{{ asset('/css/skin-blue-light.min.css') }}">
        <!-- css/skins. -->
        <link rel="stylesheet" href="{{ asset('/css/checkbox-blue.css') }}">
        <!-- redactor -->
        <link rel="stylesheet" href="{{ asset('/css/redactor.css') }}">
        <!-- ps -->
        <link rel="stylesheet" href="{{ asset('/css/ps.css') }}">
        <!-- morris -->
        <link rel="stylesheet" href="{{ asset('/css/morris.css') }}">
        <!-- custom -->
        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
    </head>
    <body class="hold-transition skin-blue-light sidebar-mini sidebar-collapse">
        <div class="wrapper">

            @include ('backend/layouts.header')

            <div class="content-wrapper">
                @yield('content-header')
                
                <section class="content">
               
                @yield('content')
            </div>

                </section>
            </div>
            <div id="app">
                <example></example>
            </div>
        @include ('backend/layouts.footer')
        </div>
        

        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/custom.js') }}"></script>
    </body>
</html>