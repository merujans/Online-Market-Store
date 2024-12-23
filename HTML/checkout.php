<?php

	require 'config.php';

	$msg = "";
	$id = "";

	// the data from the checkout form
	$firstname = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$country = $_POST["country"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$province = $_POST["province"];
	$zipCode = $_POST["zipCode"];
	$countryCode = $_POST["countryCode"];
	$phoneNumber = $_POST["phoneNumber"];
	$email = $_POST["email"];
	$subTotal = $_POST["subTotal"];
	$shoppingFee = $_POST["shoppingFee"];
	$discount = $_POST["discount"];
	$total = $_POST["total"];
	$nameofAccount = $_POST["nameofAccouont"];
	$cardNo= $_POST["cardNo"];
	$cvv = $_POST["cvv"];
	


	//Insert dat into the table
	$sql = "INSERT INTO checkout(firstName, lastName, country, 
	address,city,province,zipCode,countryCode,phoneNumber,email,subTotal,shoppingFee,
	discount,total,nameofAccouont,cardNo,cvv)
	VALUES ('$firstName','$lastName','$country','$address','$city','$province',
	'$zipCode','$countryCode ,'$phoneNumber','$email','$subTotal',$shoppingFee, $discount, $total,'$nameofAccouont','$cardNo',$cvv)";

	//execute
	if($conn->query($sql)){
		echo "<script> alert('Records added successfully!')</script>";
		
	}
	else{
		echo "<script> alert ('ERROR: Could not able to execute the query')</script>";
	}


?>