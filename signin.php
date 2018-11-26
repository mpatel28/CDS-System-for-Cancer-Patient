<?php

SESSION_START();
?>
<?php
$name=$_POST['user_name'];
$password=$_POST['password'];
$i=0;
$u="root";
$p="";
$q=mysqli_connect("localhost","$u","$p");
$query="use logindetails";
mysqli_query($q,$query) or die(mysqli_error($q));
$res=mysqli_query($q,"SELECT * FROM userinfo") or die(mysqli_error($q));
while ($row = mysqli_fetch_assoc($res))
{
if($name==$row['username'] && $password==base64_decode($row['password']))
{
	
	$i=1;
	$_SESSION['username']=$name;

}	
}
if($i==0)
{
	mysqli_close($q);
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Wrong User name or Password')
    window.location.href='signin.html';
    </SCRIPT>");	
	
}

else
{
	
	mysqli_close($q);
	header('Location: displaydata.php');
}





?>