<!DOCTYPE html>
<html>
<head>
	<title>Completed Orders</title>
</head>
<body>
	<h1>Completed Orders</h1>
	
	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Job Type</td>
			<td>Working Time</td>
			<td>Salary</td>
			<td>Location</td>
			<td>Status</td>
		</tr>

		@foreach($std as $value)
		<tr align="center">
			<td>{{$value->id}}</td>
			<td>{{$value->workname}}</td>
			<td>{{$value->time}}</td>
			<td>{{$value->salary}}</td>
			<td>{{$value->location}}</td>
			<td>{{$value->status}}</td>
		</tr>
		@endforeach
	</table>

</body>
</html>