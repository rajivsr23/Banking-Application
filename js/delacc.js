function Validate(){
	var x=document.forms['delaccount']['number'].value;
	var isValue=true;
	//T42
	if(x==null||x==""){
	document.getElementById('message').style.visibility="true";
		document.getElementById('message').innerHTML="Account No. must not be blank";
		isValid=false;
		}
		else{
		document.getElementById('message').style.visibility="hidden";
		}
		return isValid;
}