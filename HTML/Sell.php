<?php
	include_once 'connection.php';
?>


<?php
	
		$acype   = $_POST['acctype'];
		$shopb   = $_POST['country'];
		$phoneCode = $_POST['phoneCode'];
		$phone   = $_POST['phone'];
		$vcode   = $_POST['verifcode'];
		$pwd     = $_POST['password'];
		$cpwd    = $_POST['conpassword'];
		$email   = $_POST['email'];
		$sname   = $_POST['shopname'];
		
	
	$sql = "insert into seller(acctype,country,phoneCode,phone,verifcode,password,conpassword,email,shopname)values('$acype','$shopb','$phoneCode','$phone','$vcode','$pwd','$cpwd','$email','$sname')";
	
	if(mysqli_query($conn,$sql)){
		
		echo"<script>alert('We will contact with you, Thank you..!');window.location='displaySell.php';</script>";
	}
	else
	{
		echo"<script>alert('Error in inserting records!')</script>";
	}
	
	
	mysqli_close($conn);




?>