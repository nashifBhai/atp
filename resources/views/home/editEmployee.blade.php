
<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee</title>
</head>
<body>

	<h2>Edit Employee</h2>

	<a href="/show_emp_list">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>UserId</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{$std['username']}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$std['name']}}"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>