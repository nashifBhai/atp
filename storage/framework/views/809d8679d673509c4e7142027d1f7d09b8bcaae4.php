<!DOCTYPE html>
<html>
<head>
	<title>Customer Report Status</title>
</head>
<body>
	<h1>Customer Report Status</h1>
	
	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 

	<br>
	<br>

	<table border="1">
		<tr>
			
			<td>Username</td>
			<td>Report Status</td>
		</tr>

		<?php $__currentLoopData = $std; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr align="center">
			<td><?php echo e($value->name); ?></td>
			<td><?php echo e($value->report_status); ?></td>
		</tr>
		<td>
				<a  href="<?php echo e(route('home.report_status_update_temp_customer', $value->id)); ?>">Temporary Ban</a> | 
				<a  href="<?php echo e(route('home.report_status_update_par_customer', $value->id)); ?>">Parmanent Ban</a> | 
			</td>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/report_status_customer.blade.php ENDPATH**/ ?>