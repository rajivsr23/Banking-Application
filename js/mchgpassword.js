function Validate(){
	var x=document.forms['changepass']['old'].value;
	var y=document.forms['changepass']['new'].value;
	var z=document.forms['changepass']['amount'].value;
	var isValue=true;
	
	//T97
	if(x==null||x==""){
		document.getElementById('message').style.visibility="true";
		document.getElementById('message').innerHTML="Old Password must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message').style.visibility="hidden";
		isValid=true;
	}
	
	//T98
	if(y==null||y==""){
		document.getElementById('message1').style.visibility="true";
		document.getElementById('message1').innerHTML="New Password must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message1').style.visibility="hidden";
		isValid=true;
	}
	
	//T102
	if(z==null||z==""){
		document.getElementById('message2').style.visibility="true";
		document.getElementById('message2').innerHTML="Confirm Password must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message2').style.visibility="hidden";
		isValid=true;
	}
	
	
	return isValid;
}