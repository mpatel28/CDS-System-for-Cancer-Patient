<?php
	ob_start();
	require_once 'conn.php';
	if(ISSET($_POST['save'])){
		
		$Fever = $_POST['Fever'];
		$Persistentfatigue = $_POST['Persistentfatigue'];
		$frequentinfection = $_POST['frequentinfection'];
		$losingweight =  $_POST['losingweight'];
		$swollenlymph = $_POST['swollenlymph'];
		$easybleeding = ['easybleeding'];
		$recurrentnosebleed =  $_POST['recurrentnosebleed'];
		$tinyredspots =  $_POST['tinyredspots'];
		$excessivesweating =$_POST['excessivesweating'];
		$bonepain =  $_POST['bonepain'];
		$stmt = mysqli_stmt_init($conn);
		if(mysqli_stmt_prepare($stmt, "INSERT INTO `symptom` VALUES('', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")){
			mysqli_stmt_bind_param($stmt, "ssss", $Fever, $Persistentfatigue, $frequentinfection, $losingweight, $swollenlymph, $drugallergies, $recurrentnosebleed, $tinyredspots, $excessivesweating, $bonepain);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			
			header("location:index.php");
		}
		
	}
?>