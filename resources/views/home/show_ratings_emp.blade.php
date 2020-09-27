<!DOCTYPE html>
<html>
<head>
	<title>Ratings Staus</title>
</head>
<body>
	<h1>Ratings Status</h1>
	
	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 

	<br>
	<br>

	<table border="1">
		<tr>
			
			<td>Username</td>
			<td>Ratings</td>
		</tr>

		@foreach($std as $value)
		<tr align="center">
			<td>{{$value->username}}</td>
			<td>{{$value->ratings}}</td>
		</tr>
		
		@endforeach
	</table>

</body>
</html>