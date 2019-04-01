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
</head>

<body>
<CENTER>
<div class="header">
        	<font size="3" face="Times New Roman"><b>:. EQUIPMENT REGISTRATION FORM .:</b></font>
	    </div>
		<br/>
 <div class="content">

<!--<fieldset style="width: 600px; height: 350px; border: inset 2px #cccccc; border-radius: 5px"><legend>REGISTRATION FORM</legend>-->
<TABLE border="0">
				<form name="form" method="post"  action="equipment_send2.php">


                <tr><td><font color="#" face="Times New Roman, Times, serif" size="2">Activity Name:</td>
		<td><select name="activity" style="background-color:#2cd866; width: 150PX " ><?php  while($rows=mysql_fetch_array($category))
{ ?>
<option value="<?php print$rows['act_id']; ?>"><?php print$rows['actName'];
?>
<?php
}?></td>




<tr><td><font color="#" face="Times New Roman, Times, serif" size="2">Equipment Name*</td>
<td><input type="text" name="equipName" required/></td>

</tr>

<tr><td><font color="#" face="Times New Roman, Times, serif" size="2">Quantity*</td>
<td><input type="text" name="quantity" required/></td>

</tr><tr><td><font color="#" face="Times New Roman, Times, serif" size="2">Price*</td>
<td><input type="text" name="price" required/></td>

</tr>
<tr><td><font color="#" face="Times New Roman, Times, serif" size="2">Quality*</td>
<td><input type="text" name="quality" required/></td>

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