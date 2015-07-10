<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/custmstm.js"></script>
	<title>Customer</title>
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
		$account = $_POST['account'];  //Account_Number Entered in the Form
		$query="SELECT Balance,Account_Type FROM account where Account_Number=$account";
		$result = mysqli_query($con, $query);
		$value=0; //Store the Balance
		$type=''; //Stores The Account_Type
		
		
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
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