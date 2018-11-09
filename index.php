<?php
	$message = '';
	if (isset($_POST['submit'])) {
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phonenumber = $_POST['phonenumber'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];
		
		if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($phonenumber) || empty($gender) || empty($country)) {
		$message = 'All fields are required';
		}
	}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Dufuna Sign-up form</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
<body>
	<form method="POST" name="myForm" action="" >
		<fieldset>
			<h3 id="formlabel">Dufuna Sign-up Form</h3>
			<label class="marginclass" for="firstname">Firstname:</label>
			<input type="text" name="firstname"> <br> <br>

			<label class="marginclass" for="lastname">Lastname:</label>
			<input type="text" name="lastname"> <br><br>

			<label class="marginclass" for="email">Email:</label>
			<input type="email" name="email"> <br><br>

			<label class="marginclass" for="password">Password:</label>
			<input type="password" name="password"> <br><br>

			<label class="marginclass" for="confirm-password">Confirm Password:</label>
			<input type="password" name="password"><br><br>

			<label class="marginclass" for="phone-number">Phone number:</label>
			<input type="text" name="phone-number"> <br><br>

			<span class="marginclass">Gender</span><br>
			<input type="radio" name="gender" value="female" class="marginclass">
			<label for="female">Female</label> <br>

			<input type="radio" name="gender" value="male"  class="marginclass">
			<label for="male">Male</label><br><br>

			<label class="marginclass" for="country">Country</label>
			<select name="country" id="country" >
				<option value="nigeria">Nigeria</option>
				<option value="benin">Benin Republic</option>
				<option value="carmeron">Carmeron</option>
				<option value="ghana">Ghana</option>
				<option value="niger">Niger</option>
				<option value="togo">Togo</option>
				
			</select><br><br>

			<input type="submit" name="submit" value="Sign-up" id="signupbutton"><br><br>

		</fieldset>
	</form>

</body>
</html>