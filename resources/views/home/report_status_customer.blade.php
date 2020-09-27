<!DOCTYPE html>
<html>
<head>
	<title>Customer Report Status</title>
</head>
<body>
	<h1>Customer Report Status</h1>
	
	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 

	<br>
	<br>

	<table border="1">
		<tr>
			
			<td>Username</td>
			<td>Report Status</td>
		</tr>

		@foreach($std as $value)
		<tr align="center">
			<td>{{$value->name}}</td>
			<td>{{$value->report_status}}</td>
		</tr>
		<td>
				<a  href="{{route('home.report_status_update_temp_customer', $value->id)}}">Temporary Ban</a> | 
				<a  href="{{route('home.report_status_update_par_customer', $value->id)}}">Parmanent Ban</a> | 
			</td>
		@endforeach
	</table>

</body>
</html>