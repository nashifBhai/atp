<!DOCTYPE html>
<html>
<head>
	<title>Employee Salary Status</title>
</head>
<body>
	<h1>Employee Salary Status</h1>
	
	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 

	<br>
	<br>

	<table border="1">
		<tr>
			
			<td>Username</td>
			<td>Salary</td>
			<td>Salary Status</td>
		</tr>

		<?php $__currentLoopData = $std; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr align="center">
			<td><?php echo e($value->username); ?></td>
			<td><?php echo e($value->salary); ?></td>
			<td><?php echo e($value->salary_status); ?></td>
		</tr>
		<td>
				<a  href="<?php echo e(route('home.salary_status_update', $value->id)); ?>">paid</a> | 
			</td>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/salary_status.blade.php ENDPATH**/ ?>