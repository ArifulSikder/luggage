<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luggage Hub - Store Your Luggage</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script defer src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBX157KWOUI_frIUhb2ghgyTuCOwgzgqVo"
        type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

    @include('frontend.include.head')

    @stack('css')
</head>

<body>
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <div class="hero-section">
        @include('frontend.include.header')
        @yield('content')
    </div>


    @include('frontend.include.footer')

    <script src="{{ asset('frontend/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>


    @stack('js')
</body>

</html>
