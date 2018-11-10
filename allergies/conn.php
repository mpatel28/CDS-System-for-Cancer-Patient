<?php
	$conn = mysqli_connect('localhost', 'root', '', 'tp');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>