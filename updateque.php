<?php
SESSION_START();
if (isset($_SESSION["username"]))
   {
    $username=$_SESSION["username"];
$k=0;
$smoke=$_POST['smoke'];
$chemo=$_POST['chemo'];
$genetic=$_POST['genetic'];
$exposed=$_POST['exposed'];
$family=$_POST['family'];
$u="root";
$p="";
$q=mysqli_connect("localhost","$u","$p");
$query="use logindetails";
mysqli_query($q,$query) or die(mysqli_error($q));
$query="UPDATE que SET smoke='$smoke',chemo='$chemo',genetic='$genetic',exposed='$exposed',family='$family' where username='".$username."'";
mysqli_query($q,$query) or die(mysqli_error($q));
mysqli_close($q);
header('Location: allergies.html');
}
else{
    header('Location: loginrequired.html');
}
   






?>