function validateForm() {
	var letters = "/^[a-zA-Z]+$/";
	var specialChar="!@#\$%\^\&*\";
    var x = document.forms["myForm"]["payeracc"].value;
	var y=document.forms["myForm"]["payeeacc"].value;
	var z=document.forms["myForm"]["amount"].value;
	//T82
    if (x == null || x == "") {
        alert("Payers Account Number must not be blank ");
        return false;
	}
	//T85
	else if(y==null || y==""){
		alert("Payees Account Number must not be blank ");
		return false;
	}
	//T88
	else if(z==null || z==""){
		alert("Amount Field must not be blank ");
		return false;
		
	}
	//T84
	else if(payeracc.value.match(letters))
	{
		alert('accepted');
	}
	//T87
	else if(payeeacc.value.match(letters))
	{alert('accepted');}
	//T83
	else if(payeracc.value.match(specialChar)){
		alert("Special Characters are not allowed")
	}
	
	alert('Please input alphanumeric characters only');
	return false;
}


