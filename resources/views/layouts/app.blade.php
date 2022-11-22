<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav> 
        <ul>
            <li>Dashboard</li>
            <li>Login</li>
            <li>Signup</li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>