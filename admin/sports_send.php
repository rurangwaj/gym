
<html><?php
include('connection.php');



	if (!get_magic_quotes_gpc()) {

 		$_POST['name'] = addslashes($_POST['name']);

 	}

 $usercheck = $_POST['name'];

 $check = mysql_query("SELECT sportName FROM  sports WHERE sportName= '$usercheck'")

or die(mysql_error());

 $check2 = mysql_num_rows($check);



 //if the name exists it gives an error

 if ($check2 != 0) {


 echo'<FONT SIZE="4" COLOR=#EF2763 familly=>'.'Sorry, The sport :'.$_POST['name'].' is already  exist'.'</FONT>';
 $message="Sport already exist!";
 print"<script>window.alert(' $message');window.location='sport_form1.php';</script>";
 }

else
{

$sector=$_POST['name'];
  $des=$_POST['description'];

$ad="INSERT INTO sports(sportName,description)VALUES('$sector','$des')";

$na=mysql_query($ad,$bd)or die('Sector not inserted!'.mysql_error());

if(!$na)
{
	echo"Sector inserted!";
}
else
{
   $message="Sport successfully registered!";
 print"<script>window.alert(' $message');window.location='sport_form1.php';</script>";
}
mysql_close($bd);
}

?>
<a href ="sector1.php">Add a new sector </a>
</html>