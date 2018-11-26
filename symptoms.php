<?php
session_start();
if (isset($_SESSION["username"]))
   {
    $username=$_SESSION["username"];
   
$k=0;






if(isset($_POST['fever']))
{
$fever=$_POST['fever'];
}
else
{
$fever="0";
}



if(isset($_POST['persistent']))
{
$persistent=$_POST['persistent'];
}
else
{
$persistent="0";
}

if(isset($_POST['frequent']))
{
$frequent=$_POST['frequent'];
}
else
{
$frequent="0";
}

if(isset($_POST['losing']))
{
$losing=$_POST['losing'];
}
else
{
$losing="0";
}

if(isset($_POST['swollen']))
{
$swollen=$_POST['swollen'];
}
else
{
$swollen="0";
}

if(isset($_POST['easy']))
{
$easy=$_POST['easy'];
}
else
{
$easy="0";
}

if(isset($_POST['recurrent']))
{
$recurrent=$_POST['recurrent'];
}
else
{
$recurrent="0";
}

if(isset($_POST['tiny']))
{
$tiny=$_POST['tiny'];
}
else
{
$tiny="0";
}

if(isset($_POST['excessive']))
{
$excessive=$_POST['excessive'];
}
else
{
$excessive="0";
}

if(isset($_POST['bone']))
{
$bone=$_POST['bone'];
}
else
{
$bone="0";
}




$u="root";
$p="";
$q=mysqli_connect("localhost","$u","$p");
$query="use logindetails";
mysqli_query($q,$query) or die(mysqli_error($q));
$query="insert into symptoms(username,fever,persistent,frequent,losing,swollen,easy,recurrent,tiny,excessive,bone) VALUES ('$username','$fever','$persistent','$frequent','$losing','$swollen','$easy','$recurrent','$tiny','$excessive','$bone')";
mysqli_query($q,$query) or die(mysqli_error($q));
    mysqli_close($q);
header('Location: symp.html');
}
else{
    header('Location: loginrequired.html');
}
    





?>