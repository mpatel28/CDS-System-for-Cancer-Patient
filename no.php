
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign in page</title>
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
    margin: 0;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	background-color:#F1F1F1;
	text-align: center;
}
.tex
{
	    color: black;
		padding: 0.5rem 1rem;
		font-size: x-large;
		margin: 2px;
}
.button:hover {
    background-color: darkgray;
    color:white;
	
}
.button {
    
    color: black;
	background-color:antiquewhite;
        padding: 1vh 2vmax;
    text-align: center;
    text-decoration: none;
    font-size:1.1rem;
    margin: 1vh 1vw;
    cursor: pointer;
	border-radius: 15px;
	 font-weight:300;
	 border:1px solid;
	 border-color:black;
}

.button1 {
    -webkit-appearance: none;
    color: black;
	background-color:#B58BF8;
      padding: 1vh 2vmax;
    text-align: center;
    text-decoration: none;
   font-size:1.25rem;
    margin: 1vw 1vh;
    cursor: pointer;
	border-radius: 20px;
	 font-weight:300;
	 display:block;
	 
	 border:1px solid;
}
.cen{
    text-align: center;
}
.button2:hover {
    background-color: dimgray;
    color:white;
	
}
.button2 {
    color: black;
	background-color:lightgray;
        padding: 1vh 2vmax;
    text-align: center;
    text-decoration: none;
    font-size:1rem;
    margin: 1vh 1vw;
    cursor: pointer;
	border-radius: 12px;
	 font-weight:300;
	 border:1px solid;
	 border-color:black;
     float: right;
     margin-right: 2%;
     

}
.button3:hover {
    background-color: dimgray;
    color:white;
	
}
.button3 {
    color: black;
	background-color:#B58BF8;
        padding: 1vh 2vmax;
    text-align: center;
    text-decoration: none;
    font-size:1rem;
    margin: 1vh 1vw;
    cursor: pointer;
	border-radius: 12px;
	 font-weight:300;
	 border:1px solid;
	 border-color:black;
     margin-right: 2%;
     

}
</style>
</head>

<body background="one.png">
        <br>
        <a href="logout.php" align="right" class="button2" target="_self" >Log Out</a>



</body>
</html>




<?php
SESSION_START();
if (isset($_SESSION["username"]))
   {
    $username=$_SESSION["username"];
$k=0;
$u="root";
$p="";
$q=mysqli_connect("localhost","$u","$p");
$query="use logindetails";
mysqli_query($q,$query) or die(mysqli_error($q));
$query="Select fever,persistent,frequent,losing,swollen,easy,recurrent,tiny,excessive,bone FROM symptoms where username='".$username."' ORDER BY id DESC LIMIT 1 ";
$result=mysqli_query($q,$query) or die(mysqli_error($q));
while( $row = mysqli_fetch_assoc( $result ) ){
    $frequent=$row['frequent'];
     $swollen=$row['swollen'];
    $recurrent=$row['recurrent'];
    $bone=$row['bone'];
    $fever=$row['fever'];
    $persistent=$row['persistent'];
   $losing=$row['losing'];
   $easy=$row['easy'];
   $tiny=$row['tiny'];
   $excessive=$row['excessive'];
  }
if((strcmp($frequent,"1")==0) and (strcmp($swollen,"1")==0) and (strcmp($recurrent,"1")==0) and (strcmp($bone,"1")==0))
{
    echo "<div class=\"text-centered\">

    <br><br><br>
<label class=\"tex\">List of test you need to do</label>
<br><br><br>

    <Lable class=\"tex\">1. Complete Blood Count</lable><br>
    <Lable class=\"tex\">2. Blood Smear</Lable><br>
    <Lable class=\"tex\">3. Bone Marrow Biopsy</Lable><br>
    <Lable class=\"tex\">4. Computerized Temography</Lable><br>
    <Lable class=\"tex\">5. Magnetic Resonance Imaging</Lable><br>
</div>";
}
elseif ((strcmp($frequent,"1")==0) or (strcmp($swollen,"1")==0) or (strcmp($recurrent,"1")==0) or (strcmp($bone,"1")==0) or (strcmp($fever,"1")==0) or (strcmp($persistent,"1")==0) or (strcmp($losing,"1")==0) or (strcmp($easy,"1")==0) or (strcmp($tiny,"1")==0) or (strcmp($excessive,"1")==0)) {
    echo "<br><br><br><br><br><br><h1>You are fine</h1>";
}
else
{
    echo "<br><br><br><br><br><br><label class=\"tex\">You have not selected any symptoms</label><br><br><br><br><br><br>";
    echo "<a href=\"symptoms.html\" align=\"center\" class=\"button3\" target=\"_self\" >Enter Symptoms</a>";
}
mysqli_close($q);
}
else{
    header('Location: loginrequired.html');
}


?>
