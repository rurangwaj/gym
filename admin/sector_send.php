
<html><?php
include('connection.php');



	if (!get_magic_quotes_gpc()) {

 		$_POST['name'] = addslashes($_POST['name']);

 	}

 $usercheck = $_POST['name'];

 $check = mysql_query("SELECT sectName FROM  sector WHERE sectName= '$usercheck'")

or die(mysql_error());

 $check2 = mysql_num_rows($check);



 //if the name exists it gives an error

 if ($check2 != 0) {


 echo'<FONT SIZE="4" COLOR=#EF2763 familly=>'.'Sorry, The sector :'.$_POST['name'].' is already  exist'.'</FONT>';
 $message="Sector already exist!";
 print"<script>window.alert(' $message');window.location='sector_form1.php';</script>";
 }

else
{

$sector=$_POST['name'];

$ad="INSERT INTO sector(sectName)VALUES('$sector')";

$na=mysql_query($ad,$bd)or die('Sector not inserted!'.mysql_error());

if(!$na)
{
	echo"Sector inserted!";
}
else
{
   $message="Sector successfully registered!";
 print"<script>window.alert(' $message');window.location='sector_form1.php';</script>";
}
mysql_close($bd);
}

?>
