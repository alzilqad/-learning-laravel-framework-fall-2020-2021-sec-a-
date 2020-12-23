<!DOCTYPE html>
<html>

<head>
	<title>Job list page</title>
</head>

<body>

	<h3>All Job</h3>
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
			<td>TITLE</td>
			<td>COMPANY</td>
			<td>LOCATION</td>
			<td>SALARY</td>
			<td>ACTIONS</td>
		</tr>

		@for($i=0; $i < count($jobs); $i++) <tr>
			<td>{{$jobs[$i]['jobTitle']}}</td>
			<td>{{$jobs[$i]['companyName']}}</td>
			<td>{{$jobs[$i]['jobLocation']}}</td>
			<td>{{$jobs[$i]['salary']}}</td>
			
			<td>
				<a href="{{ route('job.detail', $jobs[$i]['id']) }}">Detail</a> |
				<a href="{{ route('job.edit', $jobs[$i]['id']) }}">Edit</a>
				<a href="{{ route('job.delete', $jobs[$i]['id']) }}">Delete</a>
			</td>

			</tr>
			@endfor
	</table>

</body>

</html>