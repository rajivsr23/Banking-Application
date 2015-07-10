function Validate(){
	var x=document.forms['balance']['account'].value;
	var isValue=true;
	
	//T30
	if(x==null||x==""){
		document.getElementById('message').style.visibility="true";
		document.getElementById('message').innerHTML="Account Number must not be blank";
		isValid=false;
	}
	else{
		document.getElementById('message').style.visibility="hidden";
	}
	
	
	return isValid;
}