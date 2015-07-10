function Validate(){
	var x=document.forms['fundtransfer']['payer'].value;
	var y=document.forms['fundtransfer']['payee'].value;
	var z=document.forms['fundtransfer']['amount'].value;
	var a=document.forms['fundtransfer']['descript'].value;
	var isValue=true;
	
	//T82
	if(x==null||x==""){
		document.getElementById('message').style.visibility="true";
		document.getElementById('message').innerHTML="Payers Account Number must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message').style.visibility="hidden";
	}
	
	//T85
	if(y==null||y==""){
		document.getElementById('message1').style.visibility="true";
		document.getElementById('message1').innerHTML="Payees Account Number must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message1').style.visibility="hidden";
	}
	
	//T88
	if(z==null||z==""){
		document.getElementById('message2').style.visibility="true";
		document.getElementById('message2').innerHTML="Amount Field must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message2').style.visibility="hidden";
	}
	
	if(a==null||a==""){
		document.getElementById('message3').style.visibility="true";
		document.getElementById('message3').innerHTML="Description cannot not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message3').style.visibility="hidden";
	}
	
	return isValid;
}