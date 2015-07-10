function Validate(){
	//var x=document.forms['deposit']['number'].value;
	var y=document.forms['deposit']['deposit'].value;
	var z=document.forms['deposit']['descript'].value;
	var isValue=true;
	
	//T48
	/*if(x==null||x==""){
		document.getElementById('message').style.visibility="true";
		document.getElementById('message').innerHTML="Account No. must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message').style.visibility="hidden";
	}*/
	
	//T51
	if(y==null||y==""){
		document.getElementById('message1').style.visibility="true";
		document.getElementById('message1').innerHTML="Amount field must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message1').style.visibility="hidden";
	}
	
	//T54
	if(z==null||z==""){
		document.getElementById('message2').style.visibility="true";
		document.getElementById('message2').innerHTML="Description must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message2').style.visibility="hidden";
	}
	
	return isValid;
}