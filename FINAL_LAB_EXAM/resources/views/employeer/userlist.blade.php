<!DOCTYPE html>
<html>

<head>
	<title>User list page</title>
</head>

<body>

	<h3>All User</h3>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<form method="post">
		@csrf
		<table>
			<tr>
				<td><input type="text" name="input" placeholder="search by name"></td>
				<td> <input type="submit" name="search" value="Search"> </td>
			</tr>
		</table>
	</form>

	<table border="1">
		<tr>
			<td>NAME</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>COMPANY</td>
			<td>CONTACT</td>
			<td>TYPE</td>
			<td>ACTION</td>
		</tr>

		@for($i=0; $i < count($users); $i++) <tr>
			<td>{{$users[$i]['name']}}</td>
			<td>{{$users[$i]['username']}}</td>
			<td>{{$users[$i]['password']}}</td>
			<td>{{$users[$i]['companyName']}}</td>
			<td>{{$users[$i]['contact']}}</td>
			<td>{{$users[$i]['type']}}</td>

			<td>
				<a href="">Detail</a> |
				<a href="">Edit</a>
				<a href="">Delete</a>
			</td>

			</tr>
			@endfor
	</table>

</body>

</html>