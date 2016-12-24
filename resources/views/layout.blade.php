<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('css')    
</head>
<body>
    @yield('content')

    <script src="{{ asset('assets/libs/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    
    @yield('script')
</body>
</html>
