<?php
SESSION_START();
?>
<?php
$k=0;
$name=$_POST['user_name'];
$password=$_POST['password'];
$email=$_POST['email'];
$u="root";
$p="";
$q=mysqli_connect("localhost","$u","$p");
$query="use logindetails";
mysqli_query($q,$query) or die(mysqli_error($q));
$res=mysqli_query($q,"SELECT * FROM userinfo") or die(mysqli_error($q));
while ($row = mysqli_fetch_assoc($res))
{
if($name==$row['username'])
{
	$k=1;
	mysqli_close($q);
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('User Name already exist choose new user name please')
    window.location.href='newuser.html';
    </SCRIPT>");

}	
}
$password=base64_encode($password);
if($k==0)
{
$query="insert into userinfo(username,password,email) VALUES ('$name','$password','$email')";
mysqli_query($q,$query) or die(mysqli_error($q));
$_SESSION['username']=$name;
mysqli_close($q);
header('Location: generalinfo.html');
}






?>