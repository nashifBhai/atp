
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
	<?php echo csrf_field(); ?>
	<table border="0">
		<tr>
			<td>UserId</td>
			<td><?php echo e($std['id']); ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<?php echo e($std['username']); ?>"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo e($std['name']); ?>"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/editEmployee.blade.php ENDPATH**/ ?>