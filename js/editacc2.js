function Validate(){
	var y=document.forms["editaccount"]["type"].value;
	var isValid = true;
	
	
	//T*
	if(y==null || y==""){
		document.getElementById('message').style.visibility="visible";
		document.getElementById('message').innerHTML="Account Type must not be blank";
		 isValid =  false;
	}
	else{
		document.getElementById('message1').style.visibility="hidden";
		}
	
	
		return isValid;
}