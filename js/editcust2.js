function Validate(){
	var y=document.forms["customer"]["address"].value;
	var z=document.forms["customer"]["city"].value;
	var a=document.forms["customer"]["state"].value;
	var b=document.forms["customer"]["pin"].value;
	var c=document.forms["customer"]["mobile"].value;
	var d=document.forms["customer"]["email"].value;
	var e=document.forms["customer"]["id"].value;
	var isValid = true;
	
	
	//T8
	if(y==null || y==""){
		document.getElementById('message1').style.visibility="visible";
		document.getElementById('message1').innerHTML="Address Field must not be blank";
		 isValid =  false;
	}
	else{
		document.getElementById('message1').style.visibility="hidden";
		}
	
	//T12
	if(z==null || z==""){
		document.getElementById('message2').style.visibility="visible";
		document.getElementById('message2').innerHTML="City Field must not be blank";
		 isValid =  false;
	}
	else{
		document.getElementById('message2').style.visibility="hidden";
		}
	//T16
	if(a==null || a==""){
		document.getElementById('message3').style.visibility="visible";
		document.getElementById('message3').innerHTML="State Field must not be blank";
		 isValid =  false;
	}
	else{
		document.getElementById('message3').style.visibility="hidden";
		}
	//T19
	if(b==null || b==""){
		document.getElementById('message4').style.visibility="visible";
		document.getElementById('message4').innerHTML="Pin Code must not be blank";
		 isValid =  false;
	}
	else{
		document.getElementById('message4').style.visibility="hidden";
		}
	//T23
	if(c==null || c==""){
		document.getElementById('message5').style.visibility="visible";
		document.getElementById('message5').innerHTML="Mobile no. must not be blank";
		 isValid =  false;
	}
	else{
		document.getElementById('message5').style.visibility="hidden";
		}
	//T27
	if(d==null || d==""){
		document.getElementById('message6').style.visibility="visible";
		document.getElementById('message6').innerHTML="Email ID must not be blank";
		 isValid =  false;
	}
	else{
		document.getElementById('message6').style.visibility="hidden";
		}
		
		//T*1
		if(e==null || e==""){
		document.getElementById('message7').style.visibility="visible";
		document.getElementById('message7').innerHTML="Customer ID must not be blank";
		 isValid =  false;
	}
	else{
		document.getElementById('message7').style.visibility="hidden";
		}
		return isValid;
}