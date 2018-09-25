<?php

if(isset($_POST['get_all'])){

	require 'DbConnection.php';
	global $dbconn;

	$rquery = "SELECT * FROM users";

	$result = mysqli_query($dbconn, $rquery);

	if($result){

		while($row = mysqli_fetch_array($result)){

			$data[] = $row;
		}

		print(json_encode($data));
		
	} else {

		echo "Incorrect username or password";
	}


}

?>