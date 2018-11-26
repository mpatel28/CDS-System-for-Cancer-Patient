<?php
SESSION_START();
if (isset($_SESSION["username"]))
   {
    $username=$_SESSION["username"];
$k=0;
$smoke="";
$chemo="";
$genetic="";
$exposed="";
$family="";
$u="root";
$p="";
$q=mysqli_connect("localhost","$u","$p");
$query="use logindetails";
mysqli_query($q,$query) or die(mysqli_error($q));
$query="Select username,smoke,chemo,genetic,exposed,family FROM que where username='".$username."' ORDER BY id DESC LIMIT 1 ";
//' ORDER BY id DESC LIMIT 1 
$result=mysqli_query($q,$query) or die(mysqli_error($q));
while( $row = mysqli_fetch_assoc( $result ) ){
    $smoke=$row['smoke'];
     $chemo=$row['chemo'];
    $genetic=$row['genetic'];
    $exposed=$row['exposed'];
    $family=$row['family'];
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
        <br><br><br>
<div class="text-centered">
<form  action="quest.php" method="post">
<table cellpadding="10px" align="center" cellspacing="0px">
<tr>
<td colspan="2" align="center"><label class="tex">Questionnaires</label></td></tr>
<tr>
<td style="border-right:1px solid black;" width="50%">
<label class="tex">Do smoke?</label><br></td>
<td>
<input type="radio" name="smoke" class="button" value="yes" <?php echo ($smoke== 'yes') ?  "checked" : "" ;  ?> required>Yes
<input type="radio" name="smoke" class="button" value="no"  <?php echo ($smoke== 'no') ?  "checked" : "" ;  ?>required>NO<br>
</td>
</tr>
<tr>
    <td style="border-right:1px solid black;" width="50%">
    <label class="tex">Ever had prior chemotherapy?</label><br></td>
    <td>
        <input type="radio" name="chemo" class="button" value="yes" <?php echo ($chemo== 'yes') ?  "checked" : "" ;  ?> required>Yes
        <input type="radio" name="chemo" class="button" value="no" <?php echo ($chemo== 'no') ?  "checked" : "" ;  ?> required>NO<br>
    </td>
    </tr>
<tr>
<td style="border-right:1px solid black;" width="50%">
<label class="tex">Any genetic disorder?</label><br>
</td>
<td>
    <input type="radio" name="genetic" class="button" value="yes" <?php echo ($genetic== 'yes') ?  "checked" : "" ;  ?> required>Yes
    <input type="radio" name="genetic" class="button" value="no" <?php echo ($genetic== 'no') ?  "checked" : "" ;  ?> required>NO<br>
<br></td></tr>
<tr>
    <td style="border-right:1px solid black;" width="50%">
    <label class="tex">Exposed to chemical like benzene?</label><br>
    </td>
    <td>
        <input type="radio" name="exposed" class="button" value="yes" <?php echo ($exposed== 'yes') ?  "checked" : "" ;  ?> required>Yes
<input type="radio" name="exposed" class="button" value="no" <?php echo ($exposed== 'no') ?  "checked" : "" ;  ?> required>NO<br><br></td></tr>
    <tr>
        <td style="border-right:1px solid black;" width="50%">
        <label class="tex">Does any family member had cancer?</label><br>
        </td>
        <td>
            <input type="radio" name="family" class="button" value="yes" <?php echo ($family== 'yes') ?  "checked" : "" ;  ?> required>Yes
            <input type="radio" name="family" class="button" value="no" <?php echo ($family== 'no') ?  "checked" : "" ;  ?> required>NO<br>
        <br></td></tr>  

      
















<tr><td></td><td align="center">
<input type="submit" value="Submit or Edit" class="button1">
</td></tr>
</table>
</form>
</div>






</body>
</html>
