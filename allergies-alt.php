<?php
SESSION_START();
?>
<?php
$k=0;

if(isset($_POST['eczema']))
{
$eczema=$_POST['eczema'];
}
else
{
$eczema="0";
}



if(isset($_POST['hives']))
{
$hives=$_POST['hives'];
}
else
{
$hives="0";
}

if(isset($_POST['warts']))
{
$warts=$_POST['warts'];
}
else
{
$warts="0";
}

if(isset($_POST['eggs']))
{
$eggs=$_POST['eggs'];
}
else
{
$eggs="0";
}

if(isset($_POST['milk']))
{
$milk=$_POST['milk'];
}
else
{
$milk="0";
}

if(isset($_POST['treenut']))
{
$treenut=$_POST['treenut'];
}
else
{
$treenut="0";
}

if(isset($_POST['fish']))
{
$fish=$_POST['fish'];
}
else
{
$fish="0";
}

if(isset($_POST['wheat']))
{
$wheat=$_POST['wheat'];
}
else
{
$wheat="0";
}

if(isset($_POST['soy']))
{
$soy=$_POST['soy'];
}
else
{
$soy="0";
}

if(isset($_POST['peanut']))
{
$peanut=$_POST['peanut'];
}
else
{
$peanut="0";
}

if(isset($_POST['penicillin']))
{
$penicillin=$_POST['penicillin'];
}
else
{
$penicillin="0";
}

if(isset($_POST['antibiotics']))
{
$antibiotics=$_POST['antibiotics'];
}
else
{
$antibiotics="0";
}

if(isset($_POST['antiinflammatory']))
{
$antiinflammatory=$_POST['antiinflammatory'];
}
else
{
$antiinflammatory="0";
}

if(isset($_POST['chemotherapy']))
{
$chemotherapy=$_POST['chemotherapy'];
}
else
{
$chemotherapy="0";
}


$u="root";
$p="";
$q=mysqli_connect("localhost","$u","$p");
$query="use logindetails";
mysqli_query($q,$query) or die(mysqli_error($q));
$query="insert into allergies(eczema,hives,warts,eggs,milk,treenut,fish,wheat,soy,peanut,penicillin,antibiotics,antiinflammatory,chemotherapy) VALUES ('$eczema','$hives','$warts','$eggs','$milk','$treenut','$fish','$wheat','$soy','$peanut','$penicillin','$antibiotics','$antiinflammatory','$chemotherapy')";
mysqli_query($q,$query) or die(mysqli_error($q));
$_SESSION['user_id']=$name;
mysqli_close($q);
header('Location: index.html');







?>