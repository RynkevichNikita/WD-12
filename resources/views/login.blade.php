<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="/loginadmin" method="post">
        @csrf
        <select name="role" id="role">
            <option name="admin" id="admin">admin</option>
            <option name="user" id="user">user</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>