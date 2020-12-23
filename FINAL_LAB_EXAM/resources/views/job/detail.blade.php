<!DOCTYPE html>
<html>

<head>
    <title>Job Details</title>
</head>

<body>

    <h3>Job Detail</h3>
    <a href="{{route('job.joblist')}}">Back</a> |
    <a href="/logout">logout</a>

    <br>
    <br>

    <fieldset>
        <legend>User Details</legend>
        <table>
            <tr>
                <td>Title</td>
                <td><input type="text" name="jobTitle" value="{{ $job['jobTitle'] }}"></td>

            </tr>
            <tr>
                <td>Company</td>
                <td><input type="text" name="companyName" value="{{ $job['companyName'] }}"></td>

            </tr>
            <tr>
                <td>Location</td>
                <td><input type="text" name="jobLocation" value="{{ $job['jobLocation'] }}"></td>

            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary" value="{{ $job['salary'] }}"></td>

            </tr>
        </table>

</body>

</html>