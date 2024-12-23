<?php

	require 'config.php';

	$msg = "";
	$id = "";

	//getting the data from the form
	if (isset($_POST["submit"])){

		$imgFile = $_FILES["Pimg"]["name"];
		$tempname = $_FILES["Pimg"]["tmp_name"];   
		$folder = "Images/".$imgFile;

		$name = $_POST["Pname"];
		$category = $_POST["Pcat"];
		$video = $_POST["videoURL"];
		
		$brand = $_POST["Pbrand"];
		$color = $_POST["Pcolor"];
		$gen = $_POST["Pgen"];
		$size = $_POST["Psize"];
		$type = $_POST["Ptype"];
		$mov = $_POST["Pmov"];
		$desc = $_POST["Pdesc"];
		$qty = $_POST["quantity"];
		$Pprice = $_POST["price"];
		$discount = $_POST["dis"];
		$wT = $_POST["Wtype"];
		$wP = $_POST["Wperiod"];
		$pL = $_POST["length"];
		$pW = $_POST["width"];
		$pWeight= $_POST["weight"];
	}



	//Insert data into the table
	$sql = "INSERT INTO uploadproducts(proName, proCategory, vidUrl, image,
	proBrand,proColor,proGen,proSize, proType,proMov,proDesc,proQty,
	proPrice,proDiscount,warT,warP,proL,proW,proDeli)
	VALUES ('$name','$category','$video','$imgFile','$brand','$color',
	'$gen','$size' ,'$type','$mov','$desc',$qty, $Pprice, $discount,'$wT','$wP',$pL,$pW ,$pWeight)";

	//execute
	if($conn->query($sql)){
		echo "<script> alert('Records added successfully!')</script>";
		$id = $_GET['PID'];
		header ("location:productDetails.php?$id=PID");

	}
	else{
		echo "<script> alert ('ERROR: Could not able to execute the query')</script>";
	}



?>