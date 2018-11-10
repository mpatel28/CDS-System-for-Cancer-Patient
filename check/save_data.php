<?php
	ob_start();
	require_once 'conn.php';
	if(ISSET($_POST['save'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$skill = addslashes(implode(", ", $_POST['skill']));

		$stmt = mysqli_stmt_init($conn);
		if(mysqli_stmt_prepare($stmt, "INSERT INTO `member` VALUES('', ?, ?, ?, ?)")){
			mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $address, $skill);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			
			header("location:index.php");
		}
		
	}
?>