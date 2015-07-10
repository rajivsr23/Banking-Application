function Validate(){
	//var x=document.forms['withdraw']['number'].value;
	var y=document.forms['withdraw']['amount'].value;
	var z=document.forms['withdraw']['descript'].value;
	
	
	//T104
	/*if(x==null||x==""){
		document.getElementById('message').style.visibility="true";
		document.getElementById('message').innerHTML="Account No. must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message').style.visibility="hidden";
	}*/
	
	//T107
	if(y==null||y==""){
		document.getElementById('message1').style.visibility="true";
		document.getElementById('message1').innerHTML="Amount field must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message1').style.visibility="hidden";
		isValid=true;
	}
	
	//T110
	if(z==null||z==""){
		document.getElementById('message2').style.visibility="true";
		document.getElementById('message2').innerHTML="Description must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message2').style.visibility="hidden";
		isValid=true;
	}
	
	return isValid;
}