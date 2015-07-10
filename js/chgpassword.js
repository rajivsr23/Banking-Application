function validate(){
	var x = document.forms["myForm"]["old"].value;
	var y = document.forms["myForm"]["new"].value;
if(x==null || x=="")	{
	alert('Old Password must not be blank');
	return false;
}
else if(y==null || y=="")	{
	alert('New Password must not be blank');
	return false;
}
}