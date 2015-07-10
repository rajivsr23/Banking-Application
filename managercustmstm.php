<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/managercustmstm.js"></script>
	<title>Customised Statement</title>
	
</head>

<body>
	
	<h2 id="header">Guru99 Bank</h2>
	
	<form  method="post" name="custmstm" action="managercustmstmcheck.php" onsubmit="return Validate()">
		<table width="200">
			<tr>
				<td>Account Number:</td>
				<td><input type="number" name="account" ></td>
				
			</tr>
			
			<tr>
				<td>Customer ID:</td>
				<td><input type="number" name="id" ></td>
				
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
				<td><div class="message">*</div>Number of Transactions:</td>
				<td><input type="number" name="number" ></td>
				<td><label class="message" id="message1"></td>
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
			<li><a href="manager.html">Manager</a></li><br/>
			<li><a href="newcust.php">New Customer</a></li><br/>
			<li><a href="editcust.php">Edit Customer</a></li><br/>
			<li><a href="delcust.php">Delete Customer</a></li><br/>
			<li><a href="newacc.php">New Account</a></li><br/>
			<li><a href="editacc.php">Edit Account</a></li><br/>
			<li><a href="delacc.php">Delete Account</a></li><br/>
			<li><a href="deposit.php">Deposit</a></li><br/>
			<li><a href="withdraw.php">Withdrawal</a></li><br/>
			<li><a href="mfund.php">Fund Transfer</a></li><br/>
			<li><a href="mchgpassword.php">Change Password</a></li><br/>
			<li><a href="mbalance.php">Balance Enquiry</a></li><br/>
			<li><a href="managerstm.php">Mini Statement</a></li><br/>
			<li><a href="managercustmstm.php">Customised Statement</a></li><br/>
			
			<li><a href="login.php">Log out</a></li><br/>
		</ul>
	</nav>
	
	<?php include 'connect.php';?>
	
	
	
</body>


</html>