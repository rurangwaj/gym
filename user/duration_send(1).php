<html>
<head>
</head>
<body style="background-color: #FFFFFF">
<?php
require_once('../connection.php');
$act=$_POST['act_id'];
$name=$_POST['durname'];
$ice=$_POST['price'];
$product=mysql_query("select * from  duration as du,activity as ac where ac.act_id=du.act_id  AND ac.actName='$act' AND 
du.price='$ice' ")or die(mysql_error());
if(mysql_num_rows($product))
{
$message="Information  already exist!!";
 print"<script>window.alert(' $message');window.location='duration_form1.php';</script>";
?>
<?php
}
else{
$select=mysql_query("INSERT INTO duration (`durname`,`price`,`act_id`) VALUES ('$name','$ice','$act')")or die(mysql_error());
$message="Information successfully inserted!!";
 print"<script>window.alert(' $message');window.location='duration_form1.php';</script>";
 ?>
<?php
}
?>
</body>
</html>
