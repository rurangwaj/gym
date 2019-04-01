<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
include("../connection.php")
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
        	<font size="3" face="Times New Roman"><b>:.SECTOR REGISTRATION.:</b></font>
	    </div>
		<br/>
 <div class="content">

<!--<fieldset style="width: 600px; height: 350px; border: inset 2px #cccccc; border-radius: 5px"><legend>REGISTRATION FORM</legend>-->
<TABLE border="0">
				<form name="form" method="post"  action="sector_send.php">

 <tr><td>   <font size="2" face="Times New Roman">Sector Name*:</font> </td><td> <input type="text" name="name" ></td></tr>


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
