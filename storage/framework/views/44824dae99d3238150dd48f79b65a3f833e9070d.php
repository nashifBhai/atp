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
			
			<td>Email</td>
			<td>Status</td>
		</tr>

		<?php $__currentLoopData = $std; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr align="center">
			<td><?php echo e($value->email); ?></td>
			<td><?php echo e($value->status); ?></td>
		</tr>
		<td>
				<a  href="<?php echo e(route('home.forgettableupdate', $value->id)); ?>">allow</a> | 
			</td>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/forgettable.blade.php ENDPATH**/ ?>