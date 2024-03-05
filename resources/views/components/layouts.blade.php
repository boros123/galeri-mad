<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
</head>

<body>
    @yield('content')
    @yield('js')




    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
    <script src="{{ 'js/three.min.js' }}"></script>
    <script src="{{ 'js/vanta.globe.min.js' }}"></script>
    <script src="{{ asset('aos/aos.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        VANTA.GLOBE({
            el: "#vanta-canvas",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0xff78aa,
            color2: 0xff3cd1,
            backgroundColor: 0x0
        })
    </script>

</body>

</html>
