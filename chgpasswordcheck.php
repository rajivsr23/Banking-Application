<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/chgpassword.js"></script>
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
		
		
		$oldpass=$_POST['old']; //Old Password
		$newpass=$_POST['new']; //New Password
		
		$query="Update login set Password='$newpass' where Password='$oldpass'";
		if (mysqli_query($con, $query)) {
			echo "Record updated successfully";
			} else {
			echo "Error updating record: " . mysqli_error($con);
		}
		
	?>
	
	
	
	</body>
	
	
</html>	