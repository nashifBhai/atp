<!DOCTYPE html>
<html>
<head>
	<title>Customer Hire History</title>
</head>
<body>
	<h1>Customer Hire History</h1>
	
	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 

	<br>
	<br>

	<table border="1">
		<tr>
			<td>Work ID</td>
			<td>Order name</td>
			<td>Location</td>
			<td>Status</td>
			<td>Hire ID By Customer</td>
			
		</tr>

		<?php $__currentLoopData = $std; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr align="center">
			<td><?php echo e($value->id); ?></td>
			<td><?php echo e($value->workname); ?></td>
			<td><?php echo e($value->location); ?></td>
			<td><?php echo e($value->status); ?></td>
			<td><?php echo e($value->hire_id); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/customer_hire.blade.php ENDPATH**/ ?>