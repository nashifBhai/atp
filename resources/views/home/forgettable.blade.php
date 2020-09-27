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
			
			<td>Email</td>
			<td>Status</td>
		</tr>

		@foreach($std as $value)
		<tr align="center">
			<td>{{$value->email}}</td>
			<td>{{$value->status}}</td>
		</tr>
		<td>
				<a  href="{{route('home.forgettableupdate', $value->id)}}">allow</a> | 
			</td>
		@endforeach
	</table>

</body>
</html>