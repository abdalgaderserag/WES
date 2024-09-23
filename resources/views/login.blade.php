
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
</head>
<body>
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
</body>
</html>
    <script>
        let hei = window.innerHeight;
        document.getElementById('main').style.height = hei + 'px'
    </script>

