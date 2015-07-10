
	<?php 
		include 'connect.php';
		
		
		$username=$_POST['usr']; //Username
		$newpass=$_POST['new']; //New Password
		
		$query="Update login set Password='$newpass' where Username='$username'";
		if (mysqli_query($con, $query)) {
				header("Location: login.php");
			} else {
			echo "Error updating record: " . mysqli_error($con);
		}
		
	?>
	