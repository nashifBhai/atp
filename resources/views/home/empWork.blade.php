<!DOCTYPE html>
<html>
<head>
	<title>Customer Hire History</title>
</head>
<body>
	<h1>Customer Hire History</h1>
	
	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 

	<br>
	<br>

	<table border="1">
		<tr>
			<td>Work ID</td>
			<td>Order name</td>
			<td>Location</td>
			<td>Status</td>
			
		</tr>

		@foreach($std as $value)
		<tr align="center">
			<td>{{$value->id}}</td>
			<td>{{$value->workname}}</td>
			<td>{{$value->location}}</td>
			<td>{{$value->status}}</td>
		</tr>
		@endforeach
	</table>

</body>
</html>