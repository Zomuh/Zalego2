<?php

if(isset($_POST['uname']) && isset($_POST['pwd'])){

	require 'DbConnection.php';
	global $dbconn;

	$uname = $_POST['uname'];
	$pass = md5($_POST['pwd']);

	$lquery = "SELECT * FROM users WHERE Username = '$uname' AND Password = '$pass'";

	$result = mysqli_query($dbconn, $lquery);

	if($result){
		echo "Successful Login";
	} else {
		echo "Login failed";
	}


}

?>