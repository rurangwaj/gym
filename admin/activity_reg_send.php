<html>
<head>
</head>
<body style="background-color: #FFFFFF">
<?php
require_once('../connection.php');
$Name=$_POST['actName'];
$desc=$_POST['description'];

$product=mysql_query("select * from  activity where actName='$Name'")or die(mysql_error());
if(mysql_num_rows($product))
{
$message="Activity already exist!!";
 print"<script>window.alert(' $message');window.location='acticity_reg.php';</script>";
?>
<?php
}
else{
$select=mysql_query("INSERT INTO activity (`actName`,`description`) VALUES ('$Name','$desc')")or die(mysql_error());
$message="Activity has been registered!!";
 print"<script>window.alert(' $message');window.location='acticity_reg.php';</script>";
 ?>
<?php
}
?>
</body>
</html>
