<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/fund.js"></script>
	<title>Customer</title>
	
</head>

<body>
	
	<h2 id="header">Guru99 Bank</h2>
	
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
	
	
	<?php 
		include 'connect.php';
		
		
		$number=$_POST['number']; //Account Number
		$deposit=$_POST['deposit']; //Amount to deposit
		$id=$_POST['id'];//Customer ID
		$descript=$_POST['descript'];
		
		$query="Update account set Balance=Balance+'$deposit' where Account_Number='$number' OR Cust_ID='$id'";
		$query2="Insert into transaction(Amount,Type,Account_Number,Date_Transact,Description) values('$deposit','Deposit','$number',Now(),'$descript')";
		
		if (mysqli_query($con, $query)) {
			echo "Record updated successfully";
			} else {
			echo "Error updating record: " . mysqli_error($con);
		}
		
		if (mysqli_query($con, $query2)) {
			echo "Record updated successfully";
			} else {
			echo "Error updating record: " . mysqli_error($con);
		}
		
		
		
	?>
</body>


</html>