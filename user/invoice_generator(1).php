<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
include("connection.php")
?>
<?php
$category=mysql_query("select * from client")or die(mysql_error());
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Shop Management System</title>
</head>
<body>
<center>
<form action="gym_invoice.php" method="post">
<B>GENERATE CLIENT INVOICE</B><HR/>
<table>
<tr><td><font color="#0000" face="Times New Roman, Times, serif" size="2">SELECT CUSTOMER NAME:</td>
		<td><select name="cl_id" style="width: 340"><?php  while($rows=mysql_fetch_array($category))
{ ?>
<option value="<?php print$rows['cl_id']; ?>"><?php print$rows['clFname'].'-'.$rows['clLname'];
?>
<?php
}?></td>
</tr>
<tr><td align="center" colspan="2"> <BR>  <BR>
		   <button type="submit" name="Submit" value="Submit"><font size="2">GENERATE INVOICE</font></button>
           		</td>
		</tr>
		</table>
		</form>
		</center>
</body>
</html>
