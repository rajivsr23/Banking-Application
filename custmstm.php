<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/custmstm.js"></script>
	<title>Customer</title>
	
</head>

<body>
	
	<h2 id="header">Guru99 Bank</h2>
	
	<form  method="post" name="calicut" action="custmstmcheck.php" onsubmit="return Validate()">
		<table width="200">
			<tr>
				<td>Account No:</td>
				<td><input type="number" name="account" ></td>
			</tr>
			
			<tr>
				<td>From Date:</td>
				<td><input type="date" name="frmdate" ></td>
			</tr>
			
			<tr>
				<td>To Date:</td>
				<td><input type="date" name="todate" ></td>
			</tr>
			
			<tr>
				<td>Minimum Transaction Value:</td>
				<td><input type="number" name="min" ></td>
			</tr>
			
			<tr>
				<td>Maximum Transaction Value:</td>
				<td><input type="number" name="max" ></td>
			</tr>
			
		<tr>
				<td><input type="submit" value="Submit"></td>
				<td><input type="submit" value="Reset"></td>
			</tr>
		</table><br>
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