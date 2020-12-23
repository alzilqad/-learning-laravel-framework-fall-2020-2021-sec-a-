<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <p>
        <h3>Hello {{ strtoupper(Session::get('username')) }}</h3>
    </p>

    <a href="{{route('logout.index')}}">Logout</a>
</body>

</html>