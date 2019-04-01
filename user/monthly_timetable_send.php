<?php
include('connection.php');
$activity=$_POST['activity'];
$fname=$_POST['emp_fname'];
$lname=$_POST['emp_lname'];
$phone=$_POST['emp_phone'];
$month=$_POST['month'];
$year=$_POST['year'];
$start=$_POST['start_time'];
$end=$_POST['end_time'];
if (!preg_match('/^([0]7)?[0-9]{8}$/i',$phone) ) {
$error="Sorry,Timetable has been Already set,Please update!!";
print"<script>window.alert('$error');window.location='montly_timetable.php';</script>";
}
 else{
 $select=mysql_query("select * from  monthly_tmt where emp_phone='$phone' AND month='$month' AND year='$year'")or die(mysql_error());
if(mysql_num_rows($select))
{
$message="Sorry,Timetable has been Already set,Please update!!";
 print"<script>window.alert(' $message');window.location='monthly_timetable.php';</script>";
 ?>
<?php
}
else{
$save=mysql_query("INSERT INTO monthly_tmt(`emp_fname`,`emp_lname`,`emp_phone`,`month`,`year`,`start_time`,`end_time`,`act_id`) 
VALUES ('$fname','$lname','$phone','$month','$year','$start','$end','$activity')")or die(mysql_error());
	$message="Timatable is set!!";
 print"<script>window.alert(' $message');window.location='monthly_timetable.php';</script>";

 }
}
 ?>