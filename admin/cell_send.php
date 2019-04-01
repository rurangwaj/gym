
<html><?php
include('connection.php');



	if (!get_magic_quotes_gpc()) {

 		$_POST['name'] = addslashes($_POST['name']);

 	}

 $usercheck = $_POST['name'];
         $sector = $_POST['prod_id'];
 $check = mysql_query("SELECT cellName FROM  cell WHERE cellName= '$usercheck' and sec_id='$sector' ")

or die(mysql_error());

 $check2 = mysql_num_rows($check);



 //if the name exists it gives an error

 if ($check2 != 0) {


 echo'<FONT SIZE="4" COLOR=#EF2763 familly=>'.'Sorry, The cell :'.$_POST['name'].' is already  exist'.'</FONT>';
 $message="Cell already exist!";
 print"<script>window.alert(' $message');window.location='cell_form1.php';</script>";
 }

else
{

$sector=$_POST['name'];
  $des=$_POST['prod_id'];

$ad="INSERT INTO cell(cellName,sec_id)VALUES('$sector','$des')";

$na=mysql_query($ad,$bd)or die('Sector not inserted!'.mysql_error());

if(!$na)
{
	echo"Sector inserted!";
}
else
{
   $message="Cell successfully registered!";
 print"<script>window.alert(' $message');window.location='cell_form1.php';</script>";
}
mysql_close($bd);
}

?> 