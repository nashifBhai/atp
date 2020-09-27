<!DOCTYPE html>
<html>
<head>
	<title>Edit page</title>
</head>
<body>
	<h1>Edit Page</h1>

	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 

		<table>

			@foreach($result as $value)
		<tr align="center">
			
			
		</tr>
		@endforeach

			
			<tr>
				<td>Name: </td>
				<td>{{$value->name}}</td>
			</tr>
			<tr>
				<td>Email: </td>
				<td>{{$value->email}}</td>
			</tr>

			<tr>
				<td>Contact: </td>
				<td>{{$value->phone}}</td>
			</tr>

			<tr>
				<td>Gender: </td>
				<td>{{$value->gender}}</td>
			</tr>

			<tr>
				<td>Occupation: </td>
				<td>{{$value->type}}</td>
			</tr>

			<tr>
				<td>Username: </td>
				<td>{{$value->username}}</td>
			</tr>

			<tr>
				<td>Password: </td>
				<td>{{$value->password}}</td>
			</tr>

			<tr>
			<td>
				<a  href={{route('home.editProfile', $value->id)}}">EDIT</a>| 
				<a href="/deleteUser/<%= user.id %>">DELETE</a>
			</td>
		</tr>
			
			
		</table>

</body>
</html>