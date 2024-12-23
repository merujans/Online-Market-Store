<?php

	include 'config.php';
	


	//getting the data from the form
	if (isset($_POST['signup'])){
		$Firstname		= $_POST['Firstname'];
		$Lastname 		= $_POST['Lastname'];
		$psw 			= $_POST['psw'];
		$psw_confrom 	= $_POST['psw_confrom'];
	}

	if (empty($Firstname) || empty($Lastname)|| empty($psw)|| empty($psw_confrom)) {
		header("Location: signup.html");
	}
	else {

	//Insert data into the table
	
	$sql =  "INSERT INTO signUpDetails(Firstname , Lastname  ,psw , psw_confrom)
	VALUES ('$Firstname' , '$Lastname'  ,$psw , $psw_confrom)";
	
	$res = mysqli_query($conn, $sql);
	}
	


?>

