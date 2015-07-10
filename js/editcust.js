function Validate(){
	var x=document.forms["editcust"]["id"].value;
	isValid=true;
	//T58
	if(x==null || x==""){
		document.getElementById('message').style.visibility="visible";
		document.getElementById('message').innerHTML="Customer ID is required";
		 isValid =  false;
		
	}
	else{
		document.getElementById('message').style.visibility="hidden";

		}
		return isValid;
		
}