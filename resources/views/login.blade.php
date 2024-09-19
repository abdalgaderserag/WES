@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
@endsection
@section('main')
    <div id="main">
        <div id="login">
            <div>
                <label for="username">Enter username:</label><br>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Enter password:</label><br>
                <input type="password" name="password" id="password">
            </div>
            <button onclick="window.location.href = '/'">login</button>
        </div>
    </div>
    <script>
        let hei = window.innerHeight - 182;
        document.getElementById('main').style.height = hei + 'px'
    </script>

@endsection
