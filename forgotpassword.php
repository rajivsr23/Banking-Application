<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/chgpassword.js"></script>
	<title>Customer</title>
	
</head>

<body>
	
	<h2 id="header">Guru99 Bank</h2>
	
	
	<form  method="post" name="myForm" action="forgotpasswordcheck.php" onsubmit="return validate()">
		<table width="200">
			<tr>
				<td>Username:</td>
				<td><input type="password" name="usr" ></td>
			</tr>
			
			
			
			<tr>
				<td>New Password:</td>
				<td><input type="password" name="new" ></td>
			</tr>
			<tr>
				<td><input type="submit" value="Submit"></td>
				<td><input type="submit" value="Reset"></td>
			</tr>
		</table><br>
	</form>
	
	
	
	
	</body>
	
	
</html>	