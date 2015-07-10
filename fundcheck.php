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
			<li><a href="customer.html">Customer</a></li><br/>
			<li><a href="balance.php">Balance Enquiry</a></li><br/>
			<li><a href="fund.php">Fund Transfer</a></li><br/>
			<li><a href="chgpassword.php">Change Password</a></li><br/>
			<li><a href="minstm.php">Mini Statement</a></li><br/>
			<li><a href="custmstm.php">Customised Statement</a></li><br/>
			<li><a href="login.php">Log out</a></li><br/>
		</ul>
	</nav>
	
	
	<?php 
		include 'connect.php';
		
		
		$payer=$_POST['payeracc']; //Payer Account
		$amount=$_POST['amount']; //Amount
		$payee=$_POST['payeeacc'];//Payee Account
		
		$query="Update account set Balance=Balance-'$amount' where Account_Number='$payer'";
		$query2="Update account set Balance=Balance+'$amount' where Account_Number='$payee'";
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