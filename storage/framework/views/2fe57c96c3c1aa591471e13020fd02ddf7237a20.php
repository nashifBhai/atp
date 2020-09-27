<!DOCTYPE html>
<html>
<head>
	<title>Earning</title>
</head>
<body>
	<h1>Earning</h1>
	
	<a href="/home">Back</a> | 
	<a href="/logout">Logout</a> 

	<br>
	<br>
   <form method="post" action="/btnPress">
   	<?php echo csrf_field(); ?>
			<table border="1" >
				<tr>
					<td>Net Income </td>
					<td>Withdrawn</td>
					<td>remaining Balance</td>
				</tr>
				<tr>
					<td><?php echo e($tot); ?></td>
					<td><?php echo e($wid); ?></td>
					<td><?php echo e($rem); ?></td>
	        </table> 

             <br>
	         <br>

	        <label border="1">Withdraw :</label>
			<input type="text" name="withdraw" placeholder="Enter Withdrawal Amount"><br>
			<input type="submit" name="submit" value="submit">
   </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/earning.blade.php ENDPATH**/ ?>