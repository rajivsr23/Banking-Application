<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/minstm.js"></script>
	<title>Customer</title>
	<style>
		table,td,th{
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
		$query="SELECT * FROM transaction where Account_Number=$account";
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