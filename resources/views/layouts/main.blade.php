<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    @yield('style')
</head>
<body>
@include('layouts.header')
@yield('main')
@include('layouts.footer')
</body>
<script src="{{ url('js/main.js') }}"></script>
</html>
