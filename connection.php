<?php

	$connection = mysqli_connect('localhost','root','');
	if (!$connection) {
		echo "Connection not established";
	}

	if (!mysqli_select_db($connection,'signUpForm')) {
		echo "Database not selected";
	}

	$name = $_POST['userName'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phoneNumber'];

	$sql = "INSERT INTO registration (Name,Password,email,phoneNumber) VALUES ('$name','$pass','$email','$phone')";

	if (!mysqli_query($connection,$sql))
	 {
		echo "Value not inserted";
	}
	else
	{
		echo "Value is stored in database";
	}

	header("refresh:200;url=signUpForm.html");

?>