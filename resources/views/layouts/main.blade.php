<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Movies')}} | @yield('title')</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/logo.png')}}">

    <style>
        body{
            display: none
        }
    </style>
    
    @vite('resources/js/app.js')
</head>


<body>
    @include('includes.header')

<main>
    @yield('main-content')
</main>



</body>
</html>