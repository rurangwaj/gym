<html>
<head>
</head>
<body style="background-color: #FFFFFF">
<?php
require_once('../connection.php');
$Name=$_POST['equipName'];
$tity=$_POST['quantity'];
$ice=$_POST['price'];
$ty=$_POST['quality'];
$vitye=$_POST['activity'];
$product=mysql_query("select * from  equipment where equipName='$Name'")or die(mysql_error());
if(mysql_num_rows($product))
{
$message="Equipment already exist!!";
 print"<script>window.alert(' $message');window.location='equipmentl_form2.php';</script>";
?>
<?php
}
else{
$select=mysql_query("INSERT INTO equipment(`equipName`,`quantity`,`price`,`serial_number`,`purchaseDate`,`act_id`) 
VALUES ('$Name','$tity','$ice','$ty',NOW(),'$vitye')")or die(mysql_error());
$message="Activity has been registered!!";
 print"<script>window.alert(' $message');window.location='equipmentl_form2.php';</script>";
 ?>
<?php
}
?>
</body>
</html>
