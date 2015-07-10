function Validate(){
	var x= document.forms["kannur"]["account"].value;
	//T94
	if(x==null ||x==""){
	document.getElementById('errors').innerHTML="*Account No must not be blank *";
	//alert('Wrong Number');
	return false;
	}
}

