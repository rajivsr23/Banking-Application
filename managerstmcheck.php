<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/minstm.js"></script>
	<title>Mini Statement</title>
	<style>
		table,td,th{
		border: 1px solid green;
		}
		table{
		width: 40%;
		}
		th{
		height:5px;
		background-color: green;
		color: white;
		}
		td {
		padding: 10px;
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
		$custid=$_POST['id'];
		$query="SELECT transaction.Transact_ID,transaction.Amount,transaction.Type,transaction.Date_Transact,transaction.Description 
		FROM transaction 
		inner join account on transaction.Account_Number=account.Account_Number 
		where transaction.Account_Number='$account' OR account.Cust_ID='$custid'";
		
		$result = mysqli_query($con, $query);
		$id=0;
		$amount=0; //Store the Amount
		$type=''; //Stores The Account_Type
		$date='';//Stores the Date
		$descript='';//Stores the Description
		echo '<div class="tab">';
		echo "<table>";
		echo "<tr>
		<th>Transact_ID</th>
		<th>Amount</th>		
		<th>Type</th>
		<th>Date_Transact</th>
		<th>Description</th>
		</tr>";
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$id=$row["Transact_ID"];
				$amount= $row["Amount"];
				$type=$row["Type"];
				$date=$row["Date_Transact"];
				$descript=$row["Description"];
				echo "<tr><td>".$id."</td><td>".'$'.number_format("$amount")."</td><td>".$type."</td><td>".$date."</td><td>".$descript."</td></tr>";
				echo'</div>';
				
			}
			} else {
			echo "0 results";
		};
		
		
	?>
	
</body>


</html>