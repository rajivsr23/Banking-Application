function Validate(){
	var x=document.forms["delcustomer"]["id"].value;
	var isValid=true;
	
	//T45
	if(x==null || x==""){                                          //inline
		document.getElementById('message').style.visibility="visible";
		document.getElementById('message').innerHTML="Customer ID is required";
		isValid=false;
		
	}
	else{
		document.getElementById('message').style.visibility="hidden";
		}	
	return isValid;
}