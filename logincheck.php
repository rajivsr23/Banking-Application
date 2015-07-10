<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<title>Customer</title>
	
</head>

<body>
	
	<h2 id="header">Guru99 Bank</h2>
	
	
	
	
	<?php 
		include 'connect.php';
		
		
		$user=$_POST['usrid']; //UserID
		$pass=$_POST['password']; //Password
		
		$query="Select * from login where Username='$user' AND Password='$pass' ";
		$result=mysqli_query($con, $query);
		$row_cnt = mysqli_num_rows($result);
		if($user=="manager" && $pass=="mgr"){
			header("Location: manager.html");
			}else{
			
			if ($row_cnt==0){  //Checks if the row count after the query is zero
				header("Location: login.php");
				
				} else {
				header("Location: customer.html");
				
			}
		}
		
		
	?>
	
	
</body>


</html>