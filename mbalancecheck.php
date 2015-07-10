<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/custmstm.js"></script>
	<title>Balance Enquiry</title>
	<style>table,td,th{
		border: 1px solid green;
		}
		table{
		width: 30%;
		}
		th{
		height:30px;
		background-color: green;
		color: white;
		}
		td {
		padding: 40px;
		 font-family: "Verdana", Times, serif;
		 font-size: 15px;
		 color:#4B0082;
		 
		}
		
		
	</style>
	
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
		$account = $_POST['account'];  //Account_Number Entered in the Form
		$id=$_POST['id'];
		$query="SELECT Balance,Account_Type,Account_Number FROM account where Cust_ID='$id' OR Account_Number='$account'";
		$result = mysqli_query($con, $query);
		$account=0;
		$value=0; //Store the Balance
		$type=''; //Stores The Account_Type
		
		
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
			$account=$row["Account_Number"];
				$value= $row["Balance"];
				$type=$row["Account_Type"];
			}
			} else {
			echo "0 results";
		};
		
		
		
	?>
	<div class="tab">
		<table>
			<tr>
				<th>Account Number</th>
				<th>Account Type</th>		
				<th>Balance</th>
			</tr>
			<tr>
				<td><?php echo $account?></td>
				<td><?php echo $type?></td>		
		<td><?php echo'$'. number_format("$value");?></td>;	
			</tr>
		</table>
	</div>
</body>


</html>