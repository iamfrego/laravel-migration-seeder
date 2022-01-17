<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body class="bg-black">
        <nav class="nav bg-black">
          <a class="nav-link" href="{{route('index')}}">Flight</a>
          <a class="nav-link" href="{{route('blog')}}">Blog</a>
        </nav>
        @yield('content')
    </body>
</html>