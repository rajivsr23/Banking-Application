<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<title>Customer</title>
	
</head>

<body>
	
	<h2 id="header">Guru99 Bank</h2>
	
	<form  method="post" action="login.php">
	<table width="200">
		<tr>
			<td>UserID:</td>
			<td><input type="text" name="usrid" ></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
        <tr></tr>
		<tr>
			<td><input type="submit" value="Submit"></td>
			<td><input type="submit" value="Reset"></td>
		</tr>
	</table>
	</form>
	
	
	<?php include 'connect.php';?>
	
	
		</body>
	

</html>