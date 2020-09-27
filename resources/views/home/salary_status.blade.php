<!DOCTYPE html>
<html>
<head>
	<title>Employee Salary Status</title>
</head>
<body>
	<h1>Employee Salary Status</h1>
	
	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 

	<br>
	<br>

	<table border="1">
		<tr>
			
			<td>Username</td>
			<td>Salary</td>
			<td>Salary Status</td>
		</tr>

		@foreach($std as $value)
		<tr align="center">
			<td>{{$value->username}}</td>
			<td>{{$value->salary}}</td>
			<td>{{$value->salary_status}}</td>
		</tr>
		<td>
				<a  href="{{route('home.salary_status_update', $value->id)}}">paid</a> | 
			</td>
		@endforeach
	</table>

</body>
</html>