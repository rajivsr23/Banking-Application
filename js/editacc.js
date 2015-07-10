function Validate(){
	var x=document.forms['editaccount']['number'].value;
	var isValid=true;
	
	//T55
	if(x==null||x==""){
	document.getElementById('message').style.visibility="visible";
	document.getElementById('message').innerHTML="Account No. must not be blank";
	isValid=false;
	}
	else{
		document.getElementById('message').style.visibility="hidden";
		}
		return isValid;
}