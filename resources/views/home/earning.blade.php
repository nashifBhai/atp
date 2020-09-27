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
   	@csrf
			<table border="1" >
				<tr>
					<td>Net Income </td>
					<td>Withdrawn</td>
					<td>remaining Balance</td>
				</tr>
				<tr>
					<td>{{$tot}}</td>
					<td>{{$wid}}</td>
					<td>{{$rem}}</td>
	        </table> 

             <br>
	         <br>

	        <label border="1">Withdraw :</label>
			<input type="text" name="withdraw" placeholder="Enter Withdrawal Amount"><br>
			<input type="submit" name="submit" value="submit">
   </form>
</body>
</html>