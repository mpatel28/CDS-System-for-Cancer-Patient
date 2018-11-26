<?php
SESSION_START();
if (isset($_SESSION["username"]))
   {
    $username=$_SESSION["username"];
$k=0;
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$bloodgroup=$_POST['bloodgroup'];
$height=$_POST['height'];
$width=$_POST['width'];
$u="root";
$p="";
$q=mysqli_connect("localhost","$u","$p");
$query="use logindetails";
mysqli_query($q,$query) or die(mysqli_error($q));
$query="insert into generalinfo(username,name,email,number,gender,address,bloodgroup,height,width) VALUES ('$username','$name','$email','$number','$gender','$address','$bloodgroup','$height','$width')";
mysqli_query($q,$query) or die(mysqli_error($q));
mysqli_close($q);
header('Location: quest.html');
}
else{
    header('Location: loginrequired.html');
}
   






?>