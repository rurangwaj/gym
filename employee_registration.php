<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
include("../connection.php")
?>

<html>
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>EAS</title>
<link href="admin/background.css" style="text/css" rel="stylesheet">
<link href="admin/form1.css" style="text/css" rel="stylesheet">
</head>

<body>
<CENTER>
<div class="header">
        	<font size="3" face="Times New Roman"><b>:. EMPLOYEES REGISTRATION.:</b></font>
	    </div>
		<br/>
 <div class="content">

<!--<fieldset style="width: 600px; height: 350px; border: inset 2px #cccccc; border-radius: 5px"><legend>REGISTRATION FORM</legend>-->
<TABLE border="0">
				<form name="form" method="post"  action="admin/emp_withphoto_send.php">
		
		<tr><td><font color="#058bfc" face="Times New Roman, Times, serif" size="2">SELECT CATEGORY</td>
		<td><select name="category" style="width: 340"><?php  while($rows=mysql_fetch_array($category))
{ ?>
<option value="<?php print$rows['cat_id']; ?>"><?php print$rows['cat_name'];
?>
<?php
}?></td>
<td><font color="#058bfc" face="Times New Roman, Times, serif" size="2">SELECT SECTOR</td>
		<td><select name="sector" style="width: 340"><?php  while($rows=mysql_fetch_array($sector))
{ ?>
<option value="<?php print$rows['sec_id']; ?>"><?php print$rows['sec_name'];
?>
<?php
}?></td>
</tr>
	     
   
     <tr><td>   <font size="2" face="Times New Roman">FirstName*:</font> </td><td> <input type="text" name="emp_firstname" ></td></tr>
	 <tr><td>   <font size="2" face="Times New Roman">LastName*:</font> </td><td> <input type="text" name="emp_lastname" ></td></tr>
	  <tr><td>   <font size="2" face="Times New Roman">Email*:</font> </td><td> <input type="text" name="emp_email" ></td></tr>
	  <tr><td>   <font size="2" face="Times New Roman">PhoneNumber*:</font> </td><td> <input type="text" name="emp_phonenumber" ></td></tr>
        <tr><td> <font size="2" face="Times New Roman">Marital Status*:</td><td>
		<select name="emp_marital_status">
		  <option value="status">Select your status</option>
                                 <option value="Single">Single</option>
                                 <option value="Married">Married</option>
                                                                  </select></td><td>
</tr>
<tr><td>   <font size="2" face="Times New Roman">Upload image*:</font> </td><td><input type="file" name="image" class="font" required> </td></tr>
		<tr><td align="center" colspan="4">
			<button type="submit" name="Submit" value="Submit"><img src="images/send.PNG"></button>
			</td>
		</tr>
      
		</form>
		</TABLE>
		</div>
		</CENTER>
		
</body>
</html>
