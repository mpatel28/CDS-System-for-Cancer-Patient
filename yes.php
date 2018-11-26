<?php
SESSION_START();
if (isset($_SESSION["username"]))
   {
    $username=$_SESSION["username"];
$k=0;
$wbc=$_POST['wbc'];
$rbc=$_POST['rbc'];
$hb=$_POST['hb'];
$hct=$_POST['hct'];
$mvc=$_POST['mvc'];
$platelets=$_POST['platelets'];
$prom=$_POST['prom'];
$myel=$_POST['myel'];
$meta=$_POST['meta'];
$mono=$_POST['mono'];
$lymp=$_POST['lymp'];
$plas=$_POST['plas'];
$neut=$_POST['neut'];

$u="root";
$p="";
$q=mysqli_connect("localhost","$u","$p");
$query="use logindetails";
mysqli_query($q,$query) or die(mysqli_error($q));
$query="Select fever,persistent,frequent,losing,swollen,easy,recurrent,tiny,excessive,bone FROM symptoms where username='".$username."' ORDER BY id DESC LIMIT 1 ";
//' ORDER BY id DESC LIMIT 1 
$result=mysqli_query($q,$query) or die(mysqli_error($q));
while( $row = mysqli_fetch_assoc( $result ) ){
    $frequent=$row['frequent'];
     $swollen=$row['swollen'];
    $recurrent=$row['recurrent'];
    $bone=$row['bone'];
  }
if(($prom<0 or $prom>2)and($myel<8 or $myel>16)and($meta<10 or $meta>25)and($mono<0 or $mono>2)and($lymp<11 or $lymp>23)and($plas<0 or $plas>3)and($neut<1.5 or $neut>8)and($wbc<4500 or $wbc>10000)and($rbc<4 or $rbc>6)and($hb<12 or $hb>17)and($hct<36 or $hct>50)and($mvc<80 or mvc>95)and($platelets<140000 or $platelets>450000)and (strcmp($frequent,"1")==0) and (strcmp($swollen,"1")==0) and (strcmp($recurrent,"1")==0) and (strcmp($bone,"1")==0))
{
    echo "<h1>You have Leukemia and you need to visit a Blood Cancer Specialist</h1>";
}
else
{
    echo "<h1>You are fine</h1>";
}
$query="insert into yes(username,wbc,rbc,hb,hct,mvc,platelets,prom,myel,meta,mono,lymp,plas,neut) VALUES ('$username','$wbc','$rbc','$hb','$hct','$mvc','$platelets','$prom','$myel','$meta','$mono','$lymp','$plas','$neut')";
mysqli_query($q,$query) or die(mysqli_error($q));
mysqli_close($q);
}
else{
    header('Location: loginrequired.html');
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New User Sign up page</title>
<style>
html{
font-size:17px;		
}
@media screen and (max-width:480px){
html{
font-size:12px;	
}
}
@media screen and (max-width:780px){
html{
font-size:14px;	
}
}

body {
    margin: 15%;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	background-color:#F1F1F1;
	text-align: center;
}
.tex
{
	    color: black;
		padding: 0.5rem 1rem;
		font-size: medium;
		margin: 2px;
}
.button:hover {
    background-color: lightgray;
    color: black;
	
}
.button {
    
    color: black;
	background-color:lightgray;
        padding: 1vh 2vmax;
    text-align: center;
    text-decoration: none;
    font-size:1rem;
    margin: 1vh 1vw;
    cursor: pointer;
	border-radius: 20px;
	 font-weight:300;
	 border:1px solid;
	 border-color:black;
}

	

</style>
</head>
<body background="one.png">
<a href="logout.php" align="right" class="button" target="_self" >Log Out</a>


</body>
</html>