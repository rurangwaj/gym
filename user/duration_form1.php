<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
include("../connection.php")
?>
<?php
$act=mysql_query("select * from  activity")or die(mysql_error());

?>
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
<html>
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>EAS</title>
<link href="../background.css" style="text/css" rel="stylesheet">
<link href="../form1.css" style="text/css" rel="stylesheet">
</head>

<body>
<CENTER>
<div class="header">
        	<font size="3" face="Times New Roman"><b>:.DURATION REGISTRATION.:</b></font>
	    </div>
		<br/>
 <div class="content">

<!--<fieldset style="width: 600px; height: 350px; border: inset 2px #cccccc; border-radius: 5px"><legend>REGISTRATION FORM</legend>-->
<TABLE border="0">
<form name="form" method="post"  action="duration_send.php">
<tr><td><font color="#" face="Times New Roman, Times, serif" size="2">Choose Activity*</td>
		<td><select name="act_id" style="background-color:#2cd866; width: 150PX " ><?php  while($rows=mysql_fetch_array($act))
{ ?>
<option value="<?php print$rows['act_id']; ?>"><?php print$rows['actName'];
?>
<?php
}?>
</tr>
<tr><td>   <font size="2" face="Times New Roman">Duration*:</font> </td>
<td> <select name="durname" style="background-color:#2cd866; width: 100PX" required/>
 <option>Day
 <option>Week
 <option>Month
 </td>
 </tr>
    <tr><td>   <font size="2" face="Times New Roman">Price*:</font> </td>
	<td> <input type="text" name="price"  placeholder="EX:2000" maxlength="12" onKeyPress="return onlyNum(event)" required/></td></tr>

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
