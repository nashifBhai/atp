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

			<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr align="center">
			
			
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			
			<tr>
				<td>Name: </td>
				<td><?php echo e($value->name); ?></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><?php echo e($value->email); ?></td>
			</tr>

			<tr>
				<td>Contact: </td>
				<td><?php echo e($value->phone); ?></td>
			</tr>

			<tr>
				<td>Gender: </td>
				<td><?php echo e($value->gender); ?></td>
			</tr>

			<tr>
				<td>Occupation: </td>
				<td><?php echo e($value->type); ?></td>
			</tr>

			<tr>
				<td>Username: </td>
				<td><?php echo e($value->username); ?></td>
			</tr>

			<tr>
				<td>Password: </td>
				<td><?php echo e($value->password); ?></td>
			</tr>

			<tr>
			<td>
				<a  href=<?php echo e(route('home.editProfile', $value->id)); ?>">EDIT</a>| 
				<a href="/deleteUser/<%= user.id %>">DELETE</a>
			</td>
		</tr>
			
			
		</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/MyProfile.blade.php ENDPATH**/ ?>