<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form method="post">
        @csrf
        <!-- {{ csrf_field() }} -->
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="{{ old('username') }}"></td>
                    <td>
                        @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="{{ old('password') }}"></td>
                    <td>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    @if(Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif


</body>

</html>