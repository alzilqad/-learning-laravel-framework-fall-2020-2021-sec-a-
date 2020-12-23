<!DOCTYPE html>
<html>

<head>
    <title>Create User</title>
</head>

<body>

    <h3>Create User</h3>
    <a href="{{route('home.index')}}">Back</a> |
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
                    <td><input type="text" name="name" value="{{ old('name') }}"></td>
                    <td>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
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
                    <td>Company</td>
                    <td><input type="text" name="companyName" value="{{ old('companyName') }}"></td>
                    <td>
                        @error('contact')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact" value="{{ old('contact') }}"></td>
                    <td>
                        @error('contact')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Create Account"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>