function Validate(){
	//var x=document.forms['custmstm']['account'].value;
	var y=document.forms['custmstm']['number'].value;
	var isValid=true;
	
	//T33
	/*if(x==null||x==""){
		document.getElementById('message').style.visibility="true";
		document.getElementById('message').innerHTML="Account Number must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message').style.visibility="hidden";
	}*/
	
	//T40
	if(x==null||x==""){
		document.getElementById('message1').style.visibility="true";
		document.getElementById('message1').innerHTML="Number of Transactions must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message1').style.visibility="hidden";
	}
	
	
	return isValid;
}