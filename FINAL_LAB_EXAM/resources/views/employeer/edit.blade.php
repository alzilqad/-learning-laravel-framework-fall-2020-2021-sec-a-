<!DOCTYPE html>
<html>

<head>
    <title>Update User</title>
</head>

<body>

    <h3>User Detail</h3>
    <a href="{{route('user.userlist')}}">Back</a> |
    <a href="/logout">logout</a>

    <br>
    <br>

    <form method="post">
        @csrf
        <!-- {{ csrf_field() }} -->
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value="{{ $user['name'] }}"></td>
                    <td>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="{{ $user['username'] }}"></td>
                    <td>
                        @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="{{ $user['password'] }}"></td>
                    <td>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="companyName" value="{{ $user['companyName'] }}"></td>
                    <td>
                        @error('contact')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact" value="{{ $user['contact'] }}"></td>
                    <td>
                        @error('contact')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Update User"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>