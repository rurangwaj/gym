<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
include("connection.php")
?>
<?php
$cell=mysql_query("select * from cell")or die(mysql_error());
?>
<head>
<script>
function validate(form_id,email) {
 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.forms[form_id].elements[email].value;
   if(reg.test(address) == false) {
 
      alert('Invalid Email Address');
      return false;
   }
}
</script>
<script src="../tcal.js"></script>
<link href="../background.css" style="text/css" rel="stylesheet">
<link href="../form1.css" style="text/css" rel="stylesheet">
<link href="../tcal.css" style="text/css" rel="stylesheet">

</head>

<body>
<CENTER>
<div class="header">
        	<font size="3" face="Times New Roman"><b>:. EMPLOYEES REGISTRATION.:</b></font>
	    </div>
		<br/>
 <div class="content">
<form action="emp_reg_send.php" method="post" enctype="multipart/form-data" name="addroom" id="form_id" 
onsubmit="javascript:return validate('form_id','email');">
<TABLE border="0">
 <tr><td>   <font size="2" face="Times New Roman">FirstName*:</font> </td><td> <input type="text" name="empFname" ></td></tr>
	 <tr><td>   <font size="2" face="Times New Roman">LastName*:</font> </td><td> <input type="text" name="empLname" ></td></tr>
	 <tr><td>   <font size="2" face="Times New Roman">UserName*:</font> </td><td> <input type="text" name="username" ></td></tr>
	 <tr><td>   <font size="2" face="Times New Roman">PassWord*:</font> </td><td> <input type="text" name="password" ></td></tr>
	  	  <tr><td>   <font size="2" face="Times New Roman">Birth Date*:</font> </td><td> <input type="text" class="tcal" name="birthDate" ></td></tr>
	  <tr><td>   <font size="2" face="Times New Roman">Qualification*:</font> </td><td> <input type="text" name="qualification" ></td></tr>
	  <tr><td> <font size="2" face="Times New Roman">Gender*:</td><td>
		<select name="gender" style="background-color:#3a9313">
		  <option value="status" >Select gender</option>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                                                                  </select></td><td>
</tr>
	  	 <tr><td>   <font size="2" face="Times New Roman">PhoneNumber*:</font> </td><td> <input type="text" name="phone" ></td></tr>
	  <tr><td>   <font size="2" face="Times New Roman">Email*:</font> </td><td> <input type="text" name="email" ></td></tr>
<tr><td> <font size="2" face="Times New Roman">Function*:</td><td>
		<select name="function" style="background-color:#3a9313">
		  <option value="status" >Select function</option>
                                 <option value="admin">admin</option>
                                 <option value="user">user</option>
                                                                  </select></td><td>
</tr>

<tr><td><font size="2" face="Times New Roman">Select Cell*:</font></td>
<td><select name="cell" style="width: 340"><?php  while($rows=mysql_fetch_array($cell))
{ ?>
<option value="<?php print$rows['cell_id']; ?>"><?php print$rows['cellName'];
?>
<?php
}?></td>
</tr>
<tr><td>   <font size="2" face="Times New Roman">Upload image*:</font> </td>
<td><input type="file" name="image" class="font" required> </td></tr>
		<tr><td align="center" colspan="4">
			<button type="submit" name="Submit" value="Submit"><img src="../images/submit_button.png"></button>
			</td>
		</tr>
      </TABLE>
</form>
</fieldset>
		</CENTER>
		</body>
</html>
