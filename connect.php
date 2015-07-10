<?php
$con = mysqli_connect("localhost","root","")
or die("Unable to connect to MySQL");
echo "MySQL is connected";

$selected = mysqli_select_db($con,"bank") 
 or die("Could not select the Bank ");
	echo "Database is connected";
	 
	
   
	  
?> 
