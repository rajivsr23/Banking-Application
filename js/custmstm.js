function Validate(){
	var x=document.forms["calicut"]["account"].value;
	var y=document.forms["calicut"]["min"].value;
	var z=document.forms["calicut"]["max"].value;
	//T33
	if(x==null || x==""){
		alert('Account Number must not be blank ');
		return false;
	}
	//T37
	else if(y==null || y==""){
		alert('Amount Lower Limit is required');
		return false;
	}
	//T40
	else if(z==null ||z==""){
		alert('Maximum Transaction Value must not be blank');
		return false;
	}	
	
}