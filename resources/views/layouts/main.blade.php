<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/img/dc-logo.png')}}" type="images/png">
    <title>{{env('APP_NAME', 'DC Comics')}} | @yield('title')</title>
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Importazione Vite e Sass --}}
    @vite('resources/js/app.js')
    {{--CDNS--}}
    @yield('cdns')
</head>
<body>
    
    <div class="main-container">
        {{--Header--}}
        @include('includes.header')

        <main>
            {{--Jumbotron--}}
            @include('includes.jumbotron')
            {{--Main content--}}
            @yield('main-content')
        </main>
            
        {{--Footer--}}
        @include('includes.footer')

    </div>
    
    {{--Scripts--}}
    @yield('scipts')
</body>
</html>