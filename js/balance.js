function validateForm() {
	if ( document.getElementById('drop').selectedIndex == 0 ) {
      document.getElementById('errors').innerHTML="*Account No. must not be blank*";
	   
        return false;
	}
}
