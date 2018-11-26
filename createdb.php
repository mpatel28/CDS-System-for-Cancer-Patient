<?php
$conn=mysqli_connect("localhost","root","");
if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE IF NOT EXISTS logindetails";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}




// use database
$sql = "USE logindetails";
if (mysqli_query($conn, $sql)) {
    echo "<br>Connect to database successfully";
} else {
    echo "<br>Error connecting database: " . mysqli_error($conn);
}

$query="create table IF NOT EXISTS userinfo(id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username varchar(20),password varchar(20),email varchar(25))";
mysqli_query($conn,$query) or die(mysqli_error($conn));


$query="create table IF NOT EXISTS generalinfo(id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,username varchar(20),name varchar(20),email varchar(20),number varchar(20),gender varchar(10),address varchar(35),bloodgroup varchar(15),height varchar(50),width varchar(20))";
mysqli_query($conn,$query) or die(mysqli_error($conn));


$query="create table IF NOT EXISTS allergies(id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,username varchar(20),eczema varchar(20),hives varchar(20),warts varchar(20),eggs varchar(20),milk varchar(20),treenut varchar(20),fish varchar(20),wheat varchar(20),soy varchar(20),peanut varchar(20),penicillin varchar(20),antibiotics varchar(20),antiinflammatory varchar(20),chemotherapy varchar(20))";
mysqli_query($conn,$query) or die(mysqli_error($conn));


$query="create table IF NOT EXISTS symptoms(id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,username varchar(20),fever varchar(20),persistent varchar(20),frequent varchar(20),losing varchar(20),swollen varchar(20),easy varchar(20),recurrent varchar(20),tiny varchar(20),excessive varchar(20),bone varchar(20))";
mysqli_query($conn,$query) or die(mysqli_error($conn));


$query="create table IF NOT EXISTS yes(id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,username varchar(20),wbc varchar(20),rbc varchar(20),hb varchar(20),hct varchar(20),mvc varchar(20),platelets varchar(20),prom varchar(20),myel varchar(20),meta varchar(20),mono varchar(20),lymp varchar(20),plas varchar(20),neut varchar(20))";
mysqli_query($conn,$query) or die(mysqli_error($conn));

$query="create table IF NOT EXISTS que(id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,username varchar(20),smoke varchar(20),chemo varchar(20),genetic varchar(20),exposed varchar(20),family varchar(20))";
mysqli_query($conn,$query) or die(mysqli_error($conn));



header('Location: index.html');


?>