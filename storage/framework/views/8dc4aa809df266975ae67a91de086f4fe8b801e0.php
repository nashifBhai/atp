<!DOCTYPE html>
<html>
<head>
	<title>Edit page</title>
</head>
<body>
	<h1>Edit Page</h1>

	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 
<form method="post" action ="<?php echo e(route('home.updateUser', $va->id)); ?>">
		<table>

			<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr align="center">
			
			
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<tr>
			<td>UserId</td>
			<td><?php echo e($va['id']); ?></td>
		</tr>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" id="name" value="<?php echo e($va['name']); ?>"/>
				</td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="email" id="email" value="<?php echo e($va['email']); ?>"/>
			</tr>

			<tr>
				<td>Contact: </td>
				<td><input type="text" name="phone" id="phone" value="<?php echo e($va['phone']); ?>"/>
			</tr>

			<tr>
				<td>Gender: </td>
				<td><input type="text" name="gender" id="gender" value="<?php echo e($va['gender']); ?>"/>
			</tr>

			<tr>
				<td>Occupation: </td>
				<td><input type="text" name="type" id="type" value="<?php echo e($va['type']); ?>"/>
			</tr>

			

			<tr>
				<td>Password: </td>
				<td><input type="text" name="password" id="password" value="<?php echo e($va['password']); ?>"/>
			</tr>

			<tr>
		<td>
				<a  href=<?php echo e(route('home.insertEdit',$va->id)); ?>>Confirmed</a>| 
				<a href="/deleteUser/<%= user.id %>">DELETE</a>
			</td>
		
			
			
		</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/editProfile.blade.php ENDPATH**/ ?>