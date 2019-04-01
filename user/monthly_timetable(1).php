<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
include("../connection.php")
?>
<?php
include("connection.php")
?>
<?php
$category=mysql_query("select * from   activity")or die(mysql_error());

?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>EAS</title>
<link href="../background.css" style="text/css" rel="stylesheet">
<link href="../form1.css" style="text/css" rel="stylesheet">
<script>
function onlyNum(evt) {
  // Usage: onKeyPress="return onlyNum(event)"
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;

  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    var status = 'This field accepts numbers only!';
    alert(status);
    return false;
  }
  var status = '';
  return true;
}
</script>
</head>
<body>
<CENTER>
<div class="header">
        	<font size="3" face="Times New Roman"><b>:. MONTHLY TIMETABLE SET  .:</b></font>
	    </div>
		<br/>
 <div class="content">

<!--<fieldset style="width: 600px; height: 350px; border: inset 2px #cccccc; border-radius: 5px"><legend>REGISTRATION FORM</legend>-->
<TABLE border="0">
				<form name="form" method="post"  action="monthly_timetable_send.php">


                <tr><td><font color="#" face="Times New Roman, Times, serif" size="2">Activity Name:</td>
		<td><select name="activity" style="background-color:#2cd866; width: 150PX " ><?php  while($rows=mysql_fetch_array($category))
{ ?>
<option value="<?php print$rows['act_id']; ?>"><?php print$rows['actName'];
?>
<?php
}?></td>
<tr><td><font color="#" face="Times New Roman, Times, serif" size="2">FirstName*</td>
<td><input type="text" name="emp_fname" required/></td>
</tr>
<tr><td><font color="#" face="Times New Roman, Times, serif" size="2">LastName*</td>
<td><input type="text" name="emp_lname" required/></td>
</tr>
<tr><td><font color="#" face="Times New Roman, Times, serif" size="2">PhoneNumber*</td>
<td><input type="text" name="emp_phone"  maxlength="12" onKeyPress="return onlyNum(event)" required/></td>
</tr>
<tr><td><b><font color="#" face="Times New Roman, Times, serif" size="2">MONTH/YEAR</font></b></td>
<td>
   <font color="#" face="Times New Roman, Times, serif" size="2">Month:</font><select name="month"><?php
for($a=1;$a<=12;$a+=1)
{
  ?>
  <option><?php
  print"".$a;
  ?><?php
}

?>
</select>
</td>
<td>
  <font color="#" face="Times New Roman, Times, serif" size="2"> Year:</font><select name="year"><?php
for($a=2000;$a<=2030;$a+=1)
{
  ?>
  <option><?php
  print"".$a;
  ?><?php
}

?>
</tr>
<tr>
<td><font color="#" face="Times New Roman, Times, serif" size="2"><b>Start Time:</b></font></td>
<td><select name="start_time">
<option>08:00AM
<option>09:00AM
<option>10:00AM
<option>11:00AM
<option>12:00AM
<option>13:00PM
<option>14:00PM
<option>15:00PM
<option>16:00PM
<option>17:00PM
<option>18:00PM
<option>19:00PM
<option>20:00PM
<option>21:00PM
<option>22:00PM
</select>
</td>
<td><font color="#" face="Times New Roman, Times, serif" size="2"><b>End  Time:</b></font></td>
<td>
<select name="end_time">
<option>08:00AM
<option>09:00AM
<option>10:00AM
<option>11:00AM
<option>12:00AM
<option>13:00PM
<option>14:00PM
<option>15:00PM
<option>16:00PM
<option>17:00PM
<option>18:00PM
<option>19:00PM
<option>20:00PM
<option>21:00PM
<option>22:00PM
</select>
</td>
</tr>
<tr><td align="center" colspan="4">
<button type="submit" name="Submit" value="Submit"><img src="../images/submit_button.png"></button>
</td>
</tr>
</form>
</TABLE>
</div>
</CENTER>
</body>
</html>