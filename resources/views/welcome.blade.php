<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('css/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- notificaciones -->
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


        .fondo {
            background-image: url("http://127.0.0.1:8000/img/cover.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size:cover ;
        }

    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Inicio</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-default btn-lg " >Acceso</a>

            {{-- @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrarse</a>
            @endif --}}
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel 5.8 Base + Spatie + Utilidades
            </div>

            <div class="">
            @auth
            <a href="{{ url('/home') }}">Inicio</a>
            @else
            <a href="{{ route('login') }}" class=" " ><h2>Entrar</h2></a>

            {{-- @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrarse</a>
            @endif --}}
            @endauth
        </div>

            <div class="links">
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
</body>
</html>
