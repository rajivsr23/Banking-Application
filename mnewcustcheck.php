<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/custmstm.js"></script>
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
		$name = $_POST['name'];  //Account_Number Entered in the Form
		$id=$_POST['id'];
		$gender=$_POST['gender'];
		$bday=$_POST['bday'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$pin=$_POST['pin'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		
		
		$query="Insert into customer(Cust_ID,Name,Gender,DOB,Address,City,State,Pin,Telephone,Email) Values('$id','$name','$gender','$bday','$address','$city','$state','$pin','$mobile','$email')";
		
		if (mysqli_query($con, $query)) {
			echo "New record created successfully";
			} else {
			echo "Error: " . $query . "<br>" . mysqli_error($con);
		}
		
		
		
		mysqli_close($con);
		
		
		
	?>
	
</body>


</html>	