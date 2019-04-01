<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
include("connection.php")
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
<form action="client_registration_send.php" method="post" enctype="multipart/form-data" name="addroom" id="form_id" 
onsubmit="javascript:return validate('form_id','email');">
<TABLE border="0">
 <tr><td>   <font size="2" face="Times New Roman">FirstName*:</font> </td><td> <input type="text" name="clFname" placeholder="EX:John" required/></td></tr>
	 <tr><td>   <font size="2" face="Times New Roman">LastName*:</font> </td><td> <input type="text" name="clLname" placeholder="EX:Murara" required/></td></tr>
	  <tr><td> <font size="2" face="Times New Roman">Gender*:</td><td>
		<select name="gender" style="background-color:#3a9313" required/>
		  <option value="status" >Select gender</option>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                                                                  </select></td><td>
</tr>
 <tr><td>   <font size="2" face="Times New Roman">Age*:</font> </td><td> <input type="text" name="age" placeholder="EX:17" maxlength="12" onKeyPress="return onlyNum(event)" required/></td></tr>
	  	 <tr><td>   <font size="2" face="Times New Roman">PhoneNumber*:</font> </td><td> <input type="text" name="phone"  placeholder="0783744743" maxlength="12" onKeyPress="return onlyNum(event)" required/></td></tr>
	  <tr><td>   <font size="2" face="Times New Roman">Email*:</font> </td><td> <input type="text" name="email" placeholder="EX:John@gmail.com" required/></td></tr>
	  <tr><td>   <font size="2" face="Times New Roman">Address1*:</font> </td><td> <input type="text" name="address1" placeholder="EX:Home" required/></td></tr>
	   <tr><td>   <font size="2" face="Times New Roman">Address2*:</font> </td><td> <input type="text" name="address2" placeholder="EX:Job area" required/></td></tr>

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
