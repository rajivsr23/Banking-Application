<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/fund.js"></script>
	<title>Customer</title>
	
</head>

<body>
	
	<h2 id="header">Guru99 Bank</h2>
	
	<form name="myForm" method="post" action="fundcheck.php" onsubmit="return validateForm()">
		<table width="200">
			<tr>
				<td>Payers account no:</td>
				<td><input type="number" name="payeracc" ></td>
			</tr>
			<tr>
				<td>Payees account no:</td>
				<td><input type="number" name="payeeacc" /></td>
			</tr>
			<tr>
				<td>Amount:</td>
				<td><input type="number" name="amount" /></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><input type="text" name="descript" /></td>
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