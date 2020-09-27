<!DOCTYPE html>
<html>
<head>
	<title>Employee Report Status</title>
</head>
<body>
	<h1>Employee Report Status</h1>
	
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
			<td>{{$value->username}}</td>
			<td>{{$value->report_status}}</td>
		</tr>
		<td>
				<a  href="{{route('home.report_status_update_temp_emp', $value->id)}}">Temporary Ban</a> | 
				<a  href="{{route('home.report_status_update_par_emp', $value->id)}}">Parmanent Ban</a> | 
			</td>
		@endforeach
	</table>

</body>
</html>