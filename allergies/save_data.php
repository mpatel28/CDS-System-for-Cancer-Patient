<?php
	ob_start();
	require_once 'conn.php';
	if(ISSET($_POST['save'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$skinallergies = addslashes(implode(", ", $_POST['skinallergies']));
		$foodallergies = addslashes(implode(", ", $_POST['foodallergies']));
		$drugallergies = addslashes(implode(", ", $_POST['drugallergies']));

		$stmt = mysqli_stmt_init($conn);
		if(mysqli_stmt_prepare($stmt, "INSERT INTO `member` VALUES('', ?, ?, ?, ?, ?, ?)")){
			mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $address, $skinallergies, $foodallergies, $drugallergies);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			
			header("location:index.php");
		}
		
	}
?>