<!DOCTYPE html>
<html>
<head>
	<title>Employee Report Status</title>
</head>
<body>
	<h1>Employee Report Status</h1>
	
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
			<td><?php echo e($value->username); ?></td>
			<td><?php echo e($value->report_status); ?></td>
		</tr>
		<td>
				<a  href="<?php echo e(route('home.report_status_update_temp_emp', $value->id)); ?>">Temporary Ban</a> | 
				<a  href="<?php echo e(route('home.report_status_update_par_emp', $value->id)); ?>">Parmanent Ban</a> | 
			</td>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/report_status_emp.blade.php ENDPATH**/ ?>