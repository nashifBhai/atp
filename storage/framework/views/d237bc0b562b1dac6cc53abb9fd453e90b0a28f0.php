
<!DOCTYPE html>
<html>
<head>
	<title>Delete Employee</title>
</head>
<body>

	<h2>Delete Employee</h2>

	<a href="/show_emp_list">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	<?php echo csrf_field(); ?>
	<table border="0">
		<tr>
			<td>UserId :</td>
			<td><?php echo e($std['id']); ?></td>
		</tr>
		<tr>
			<td>Username :</td>
			<td><?php echo e($std['username']); ?></td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><?php echo e($std['name']); ?></td>
		</tr>
		
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/deleteEmployee.blade.php ENDPATH**/ ?>