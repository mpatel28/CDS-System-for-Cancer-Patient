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
$query="UPDATE generalinfo SET name='$name',email='$email',number='$number',gender='$gender',address='$address',bloodgroup='$bloodgroup',height='$height',width='$width' where username='".$username."'";
mysqli_query($q,$query) or die(mysqli_error($q));
mysqli_close($q);
header('Location: displayque.php');
}
else{
    header('Location: loginrequired.html');
}
   






?>