<?php

		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$phoneNumber = $_POST['phoneNumber'];
		$message = $_POST['message'];
		
		//Database connection
		$conn = new mysqli('localhost','root','','onlinemarketstore');
		if($conn->connect_error){
			die('Connection Filed : '.$conn->connect_error);
		}else{
			$stmt = $conn->prepare("insert into register(firstName,lastName,email,phoneNumber,message)
				values(?,?,?,?,?)");
			$stmt->bind_param("sssis",$firstName,$lastName,$email,$phoneNumber,$message);
			$stmt->execute();
			echo "submitted successfully...";
			$stmt->close();
			$conn->close();
		}

?>