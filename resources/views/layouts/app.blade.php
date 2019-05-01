<head>
    <title>Dimension by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    
</head>



<html>
    <head>
        <title>App Name - @yield('title')</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
    </head>
    <body>
        @section('sidebar')
            
        @show

        @yield('content')

   