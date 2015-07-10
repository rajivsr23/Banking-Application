
	<?php 
		include 'connect.php';
		
		$username=$_POST['usrname'];//Username
		$ans1=$_POST['ans1']; //Answer 1
		
		
		$query="Select * from login where Answers='$ans1'";
		$result=mysqli_query($con, $query);
		$row_cnt = mysqli_num_rows($result);
		
		if ($row_cnt==0){  //Checks if the row count after the query is zero
			header("Location: login.php");
			
			} else {
			header("Location: forgotpassword.php");
			
		}
		
		
	?>
	