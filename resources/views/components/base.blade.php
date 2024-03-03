<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body style="display:flex;flex-direction:column;justify-content:space-around;align-items:center;height:700px;">
    <header>
        <nav>
            <a href="/register">Registration</a>
            <a href="/login">Login</a>
        </nav>
    </header>
    <main style="background:lightgrey;width:30%;height:40%;display:flex;justify-content:center;border-radius:10px">
        {{ $slot }}
    </main>
</body>
</html>