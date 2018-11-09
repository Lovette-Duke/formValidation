
 function validateForm(){
	var firstname = document.forms["myForm"]["firstname"];
	if (firstname.value == "") {
		alert("Please input your firstname");
		firstname.focus();
		return false;
	}
	var lastname = document.forms["myForm"]["lastname"];
	if (lastname.value == "") {
		alert("Please input your lastname");
		lastname.focus();
		return false;
	}

	var email = document.forms["myForm"]["email"];
	if (email.value == "") {
		alert("Please input your email address");
		email.focus();
		return false;
	}	

	// var password = document.forms["myForm"]["password"];
	// if (password.value == "") {
	// 	alert("Please input your password");
	// 	password.focus();
	// 	return false;
	// }	

	// var confirmpassword = document.forms["myForm"]["confirm-password"];
	// if (confirmpassword.value == "") {
	// 	alert("Please confirm your password");
	// 	confirmpassword.focus();
	// 	return false;
	// }	

	var phone = document.forms["myForm"]["phone-number"]
	if (phone.value == "" || isNaN(phone.value)) {
		alert("Phone number should be numeric.");
		phone.focus();
		return false;
	}

	if (phone.value.length != 11) {
		alert( "Phone number should be exactly 11 digits.");
		phone.focus();
		return false;
	}

	var gender = document.forms["myForm"]["gender"];
	if (!(gender[0].checked || gender[1].checked)) {
		alert("Please select your gender");
		return false;
	}

	var country = document.forms["myForm"]["country"]
	if (country.value == "") {
		alert("Please select a country.");
		country.focus();
		return false;
	}	
return true;
}