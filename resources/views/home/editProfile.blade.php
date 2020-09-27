<!DOCTYPE html>
<html>
<head>
	<title>Edit page</title>
</head>
<body>
	<h1>Edit Page</h1>

	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 
<form method="post" action ="{{route('home.updateUser', $va->id)}}">
		<table>

			@foreach($user as $va)
		<tr align="center">
			
			
		</tr>
		@endforeach

			<tr>
			<td>UserId</td>
			<td>{{$va['id']}}</td>
		</tr>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" id="name" value="{{$va['name']}}"/>
				</td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="email" id="email" value="{{$va['email']}}"/>
			</tr>

			<tr>
				<td>Contact: </td>
				<td><input type="text" name="phone" id="phone" value="{{$va['phone']}}"/>
			</tr>

			<tr>
				<td>Gender: </td>
				<td><input type="text" name="gender" id="gender" value="{{$va['gender']}}"/>
			</tr>

			<tr>
				<td>Occupation: </td>
				<td><input type="text" name="type" id="type" value="{{$va['type']}}"/>
			</tr>

			

			<tr>
				<td>Password: </td>
				<td><input type="text" name="password" id="password" value="{{$va['password']}}"/>
			</tr>

			<tr>
		<td>
				<a  href={{route('home.insertEdit',$va->id)}}>Confirmed</a>| 
				<a href="/deleteUser/<%= user.id %>">DELETE</a>
			</td>
		
			
			
		</table>

</body>
</html>