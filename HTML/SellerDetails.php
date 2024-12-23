<?php

	require 'config.php';



	//getting the data from the form
	if (isset($_POST['submit'])){
		$country		= $_POST['country'];
		$address		= $_POST['address'];
		$town			= $_POST['town'];
		$state			= $_POST['state'];
		$zip			= $_POST['zip'];
		$fName			= $_POST['fName'];
		$lName			= $_POST['lName'];
		$NIC		 	= $_POST['NIC'];
		$accHolderName	= $_POST['accHolderName'];
		$cardNumber		= $_POST['cardNumber'];
		$bankName		= $_POST['bankName'];
		$branchName		= $_POST['branchName'];		
		$fileName = basename($_FILES['fimage']['name']); 
		$fileName = basename($_FILES['bimage']['name']);
		$fileName = basename($_FILES['cbimage']['name']);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
		
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['fimage']['tmp_name']; 
            $image = $_FILES['bimage']['tmp_name']; 
            $image = $_FILES['cbimage']['tmp_name']; 			
            $imgContent = addslashes(file_get_contents($image)); 		
		}

	if (empty($country) || empty($address)|| empty($town)|| empty($state)||empty($zip) || empty($fName)|| empty($lName)|| empty($NIC) || empty($fimage)|| empty($bimage)|| empty($accHolderName)|| empty($cardNumber) || empty($bankName)|| empty($branchName)|| empty($cbimage)) {
		header("Location: SellerDetails.html");
	}
	else {
	
	   // Insert image content into database 
       $sql = "INSERT INTO sellerDetails (country, address, town ,state, zip, fName, lName, NIC, fimage, bimage, accHolderName, cardNumber, bankName,branchName,cbimage ) 
	   VALUES ('$country', '$address', '$town' ,'$state', $zip, '$fName', '$lName', '$NIC', '$fimage', '$bimage', '$accHolderName', $cardNumber, '$bankName','$branchName','$cbimage')"; 
        
		$res = mysqli_query($conn, $sql);
	}

	}

?>