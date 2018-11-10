<?php
	$conn = mysqli_connect('localhost', 'root', '', 'cds');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>