<?php

	require 'config.php';
		
		$accountType      = $_POST['accountType'];
		$shopBasedIn      = $_POST['shopBasedIn'];
		$phoneCode        = $_POST['phoneCode'];
		$phone            = $_POST['phone'];
		$verificationCode = $_POST['verificationCode'];
		$password         = $_POST['password'];
		$conformPassword  = $_POST['conformPassword'];
		$email 		      = $_POST['email'];
		$shopName         = $_POST['shopName'];
				 
		if (!empty($accountType) || !empty($shopBasedIn) || !empty($phoneCode) || !empty($verificationCode) || !empty($password) || !empty($conformPassword) || !empty($email) || !empty($shopName)) {
				$host = "localhost";
				$dbUsername = "root";
				$dbPassword = "";
				$dbname = "onlinemarketstore";
				
				//create connection
				$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
				
				if (mysqli_connect_error()) {
					die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
				} else {
					$SELECT = "SELECT email From sellsign Where email = ? Limit 1";
					$INSERT = "INSERT Into sellsign (accountType, shopBasedIn, phoneCode, phone, verificationCode,
                        password, conformPassword, email, shopName) values ('$accountType', '$shopBasedIn',' $phoneCode', '$phone', '$verificationCode',
								'$password',' $conformPassword', '$email', '$shopName')";
						
						//Prepare statement
						$stmt= $conn->prepare($SELECT);
						$stmt->bind_param ("s", $email); 
						$stmt->execute();
						$stmt->bind_result($email);
						$stmt->store_result();
						$rnum= $stmt->num_rows;
						
						if ($rnum==0) {
							$stmt->close();
							
							$stmt = $conn->prepare($INSERT);
							
							$stmt->execute();
							echo "New record inserted succesfully";
					} else {
							echo "already registered";
		
					}
					$stmt->close();
					$conn->close();
					
				}
					
				
		}else {
			echo "All field are required";
			die();
		}

	

?>