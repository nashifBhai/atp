
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body style="background-color:white;">

<h1 align="center">DailyNeed.com</h1>
<h2 align="center">Login Page</h2>
  <form method="POST">
		<?php echo csrf_field(); ?>
	  <table align="center">
	  	<tr class="row">
	  		<td class="label"><label for="username">Username</label></td><br/>
	  		<td>
	  			<input type="text" name="username" placeholder="Username" />
	  		</td>
	  	</tr>
	  	<tr>
	    	<td></td>
	    </tr>
	  	<tr class="row">
	  		<td class="label"><label for="username">Password</label></td><br/>
	  		<td>
	  			<input type="password" name="password" placeholder="Password" />
			</td>
	  	</tr>

	    <tr>
	    	<td></td>
	    </tr>
	    <tr>
	       	<td colspan="4">
	       		<input type="submit" name="submit" value="Login"/>
	       	</td>

	       	<td></td>
	    </tr>
	    <tr>
	    	<td colspan="2">
	    		<h4 style="color:Red;"></h4>
	    	</td>

	    </tr>
	    <tr>
	    	<td>
    			<a href="/register">
    				<input type="button" value="Click here to Register"/>
    		    </a>
	    	</td>
	    </tr>

	    <div align="center">
						  <strong >
							<?php echo e(session('msg')); ?>

						  </strong>
		  			 </div>

	  </table>
	  <table align="center">
			<tr>
				<td><h4 style="color:black;">Thank You</h4></td>
			</tr>
	  </table>
  </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project\resources\views/login/index.blade.php ENDPATH**/ ?>