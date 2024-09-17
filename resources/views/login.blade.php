<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
</head>
<body>
    <div id="login">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <button>login</button>
    </div>
@include('layouts.footer')
</body>
</html>
