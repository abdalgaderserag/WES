<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    @yield('style')
    @livewireStyles
</head>
<body>
<livewire:layouts.header />
@yield('main')
@include('layouts.footer')
</body>
@livewireScripts
<script src="{{ url('js/main.js') }}"></script>
@yield('script')
<script>
    function submitButton() {
        document.getElementById('submit-button').click();
    }
</script>
</html>
