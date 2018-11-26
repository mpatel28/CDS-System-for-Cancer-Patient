<?php
SESSION_START();
if (isset($_SESSION["username"]))
   {
    $username=$_SESSION["username"];
$k=0;
$name="";
$email="";
$number="";
$gender="";
$address="";
$bloodgroup="";
$height="";
$width="";
$u="root";
$p="";
$q=mysqli_connect("localhost","$u","$p");
$query="use logindetails";
mysqli_query($q,$query) or die(mysqli_error($q));
$query="Select username,name,email,number,gender,address,bloodgroup,height,width FROM generalinfo where username='".$username."' ORDER BY id DESC LIMIT 1 ";
//' ORDER BY id DESC LIMIT 1 
$result=mysqli_query($q,$query) or die(mysqli_error($q));
while( $row = mysqli_fetch_assoc( $result ) ){
    $name=$row['name'];
     $email=$row['email'];
    $number=$row['number'];
    $gender=$row['gender'];
    $address=$row['address'];
    $bloodgroup=$row['bloodgroup'];
   $height=$row['height'];
   $width=$row['width'];
  }

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
<title>General Information</title>

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
		font-size: large;
		margin: 2px;
}
.button1:hover {
    background-color: dimgray;
    color:white;
	
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

.button1 {
    -webkit-appearance: none;
    color: black;
	background-color:#B58BF8;
      padding: 1vh 2vmax;
    text-align: center;
    text-decoration: none;
   font-size:1rem;
    margin: 1vw 1vh;
    cursor: pointer;
	border-radius: 20px;
	 font-weight:300;
	 display:block;
	 
	 border:1px solid;
}
.down
{ 
       position: fixed;     
           
       bottom: 0px; 
       
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

</style>

    
</head>

<body background="one.png">
<br>
        <a href="logout.php" align="right" class="button2" target="_self" >Log Out</a>
<div class="text-centered">
<form  action="updatedata.php" method="post">
<table cellpadding="10px" align="center" cellspacing="0px">
<tr>
<td colspan="2" align="center"><label class="tex">General Information</label></td></tr>
<tr>
<td style="border-right:1px solid black;" width="50%">
<label class="tex">Name</label><br></td>
<td>
<input type="text" name="name" class="button" value='<?php echo  $name; ?>' required><br>
</td>
</tr>
<tr>
    <td style="border-right:1px solid black;" width="50%">
    <label class="tex">Email id</label><br></td>
    <td>
    <input type="email" name="email" class="button" value='<?php echo  $email; ?>' required><br>
    </td>
    </tr>
<tr>
<td style="border-right:1px solid black;" width="50%">
<label class="tex">Mobile Number</label><br>
</td>
<td>
<input type="text" name="number" class="button" value='<?php echo  $number; ?>' required>
<br></td></tr>
<tr>
    <td style="border-right:1px solid black;" width="50%">
    <label class="tex">Gender</label><br>
    </td>
    <td>
        <input type="radio" name="gender" value="male" <?php echo ($gender== 'male') ?  "checked" : "" ;  ?>> Male
        <input type="radio" name="gender" value="female" <?php echo ($gender== 'female') ?  "checked" : "" ;  ?>> Female
        <input type="radio" name="gender" value="other" <?php echo ($gender== 'other') ?  "checked" : "" ;  ?>> Other
    <br></td></tr>
    <tr>
        <td style="border-right:1px solid black;" width="50%">
        <label class="tex">Address</label><br>
        </td>
        <td>
        <input type="text" name="address" class="button" value='<?php echo  $address; ?>' required>
        <br></td></tr>  

        <tr>
            <td style="border-right:1px solid black;" width="50%">
            <label class="tex">Blood Group</label><br>
            </td>
            <td>
            <input type="text" name="bloodgroup" class="button" value='<?php echo  $bloodgroup; ?>' required>
            <br></td></tr>
            <tr>
                <td style="border-right:1px solid black;" width="50%">
                <label class="tex">Height</label><br>
                </td>
                <td>
                <input type="text" name="height" class="button" value='<?php echo  $height; ?>' required>
                <br></td></tr>
                <tr>
                    <td style="border-right:1px solid black;" width="50%">
                    <label class="tex">Weight</label><br>
                    </td>
                    <td>
                    <input type="text" name="width" class="button" value='<?php echo  $width; ?>' required>
                    <br></td></tr>
















<tr><td></td><td align="center">
<input type="submit" value="Submit or Edit" class="button1">
</td></tr>
</table>
</form>
</div>






</body>
</html>
