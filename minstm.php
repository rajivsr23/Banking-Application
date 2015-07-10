<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/minstm.js"> </script>
	<title>Customer</title>
	
</head>

<body>
	
	<h2 id="header">Guru99 Bank</h2>
	
	<form  method="post" name="kannur" action="minstmcheck.php" onsubmit="return Validate()">
		<div id='errors' style="color:#FF0000">
				</div>
		Account No:<input type="number" name="account" ><br><br>
		
		
		<input type="submit" value="Submit">
		<input type="submit" value="Reset">
		
	</form>
	
	<!--Navigation Bar-->
	<nav>
		<ul>
			<br><br/>
			<li><a href="customer.html">Customer</a></li><br/>
			<li><a href="balance.php">Balance Enquiry</a></li><br/>
			<li><a href="fund.php">Fund Transfer</a></li><br/>
			<li><a href="chgpassword.php">Change Password</a></li><br/>
			<li><a href="minstm.php">Mini Statement</a></li><br/>
			<li><a href="custmstm.php">Customised Statement</a></li><br/>
			<li><a href="login.php">Log out</a></li><br/>
		</ul>
	</nav>
	
	
	<?php include 'connect.php';?>
	
		
		</body>
		
		
		</html>		