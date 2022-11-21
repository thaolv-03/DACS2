<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('assets/img/icon/icon_1.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
    @yield('css')
    
    <title>IKEYBOARD | @yield('title')</title>

</head>

<body>

    <div class="main">

        @include('clients.components.header')
        
        <main class="container">
            @yield('content')
        </main>

        @include('clients.components.footer')
        
        <!-- Button to homepage -->
        <button id="myBtn" title="Back to homepage"><i class="fa-solid fa-arrow-up"></i></button>
    </div>


    <script src="https://kit.fontawesome.com/ba36f54e69.js" crossorigin="anonymous" async></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="{{asset('assets/js/scroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/slider.js')}}"></script>
    <script src="{{asset('assets/js/cart.js')}}"></script>
    @yield('js')
    @stack('js')
</body>
</html>