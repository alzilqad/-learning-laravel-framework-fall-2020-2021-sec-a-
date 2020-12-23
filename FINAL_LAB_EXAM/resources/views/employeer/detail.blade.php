<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>
</head>

<body>

    <h3>User Detail</h3>
    <a href="{{route('user.userlist')}}">Back</a> |
    <a href="/logout">logout</a>

    <br>
    <br>

    <fieldset>
        <legend>User Details</legend>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="{{ $user['name'] }}"></td>

            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="contact" value="{{ $user['contact'] }}"></td>

            </tr>
            <tr>
                <td>Company</td>
                <td><input type="text" name="companyName" value="{{ $user['companyName'] }}"></td>

            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="{{ $user['username'] }}"></td>

            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="{{ $user['password'] }}"></td>

            </tr>
        </table>

</body>

</html>