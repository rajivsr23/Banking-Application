<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<title>Customer</title>
	
</head>

<body>
	
	<h2 id="header">Guru99 Bank</h2>
	
	<form  method="post" action="passquestionscheck.php">
		<table width="200">
			<tr><td>Username:</td>
			<td><input type="text" name="usrname" ></td>
			</tr>
			
			<tr>
			<td>Which college did you graduate from?</td>
			</tr>
			<tr>
				<td><input type="text" name="ans1" autocomplete="off" ></td>
			</tr>
			
			<tr>
				<td><input type="submit" value="Submit"></td>
				<td><input type="submit" value="Reset"></td>
			</tr>
		</table>
	</form>
	
	
	<?php include 'connect.php';?>
	
	
</body>


</html>