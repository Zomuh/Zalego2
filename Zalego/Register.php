<?php

if(isset($_POST['fname']) && isset($_POST['lname']) 
	&& isset($_POST['uname']) && isset($_POST['pwd'])){

	require 'DbConnection.php';
	global $dbconn;

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$pass = md5($_POST['pwd']);

	$iquery = "INSERT INTO users(First_Name, Last_Name, Username, Password) 
				VALUES('$fname','$lname','$uname','$pass')";

	$result = mysqli_query($dbconn, $iquery);

	if($result){
		echo "Successful registration";
	} else {
		echo "Registration failed";
	}


}

?>