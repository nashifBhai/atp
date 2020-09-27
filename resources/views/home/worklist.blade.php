<!DOCTYPE html>
<html>
<head>
	<title>Manage All Order</title>
</head>
<body>
	<h1>Manage All Order</h1>

	<a href="/home">Back</a> |
	<a href="/logout">Logout</a>

	<br>
	<br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Work name</td>
			<td>Working Time</td>
			<td>Salary</td>
			<td>Location</td>
			<td>Status</td>
			<td>Get Registered</td>
		</tr>

		@foreach($std as $value)
		<tr align="center">
			<td>{{$value->id}}</td>
			<td>{{$value->workname}}</td>
			<td>{{$value->time}}</td>
			<td>{{$value->salary}}</td>
			<td>{{$value->location}}</td>
			<td>{{$value->status}}</td>
			<td>
				<a  href={{route('home.getReg', $value->id)}}">Confirm</a>
			</td>
			
		</tr>
		@endforeach
	</table>
</body>
</html>
