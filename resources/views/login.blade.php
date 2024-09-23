<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
    <script src="{{ url('js/axios/axios.min.js') }}"></script>
</head>
<body>
    <livewire:login />
</body>
<script>
    let hei = window.innerHeight;
    document.getElementById('main').style.height = hei + 'px';
</script>
</html>

