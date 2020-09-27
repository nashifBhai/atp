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
			<td>ID</td>
			<td>Order name</td>
			<td>Working Time</td>
			<td>Salary</td>
			<td>Location</td>
			<td>Status</td>
		</tr>

		<?php $__currentLoopData = $std; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr align="center">
			<td><?php echo e($value->id); ?></td>
			<td><?php echo e($value->workname); ?></td>
			<td><?php echo e($value->time); ?></td>
			<td><?php echo e($value->salary); ?></td>
			<td><?php echo e($value->location); ?></td>
			<td><?php echo e($value->status); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/completeOrder.blade.php ENDPATH**/ ?>