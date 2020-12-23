<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <p>
        <h3>Hello {{ strtoupper(Session::get('username')) }}</h3>
    </p>

    @if (Session::get('type') == 'admin')
        <a href="{{route('user.create')}}">Create New User</a> |
        <a href="{{route('user.userlist')}}">View Userlist</a> |
    @elseif (Session::get('type') == 'employeer')
        <a href="{{route('job.jobcreate')}}">Create New Job</a> |
        <a href="{{route('job.joblist')}}">View Joblist</a> |
    @endif

    <a href="{{route('logout.index')}}">Logout</a>
</body>

</html>