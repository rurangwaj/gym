<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>GYM | management system</title>
</head>
<body>

<form method="post" name="form1" action="police_registration_send.php">
<table>
<tr><td>FirstName*</td>
<td><input type="text" name="pol_firstname" required/></td>
<td>LastName*</td>
<td><input type="text" name="pol_lastname"></td>
</tr>
<tr><td>PhoneNumber*</td>
<td><input type="text" name="pol_phone"></td>
<td>Gender*</td>
<td>
<select name="pol_gender" >
<option>Male
<option>Female
</select>
</td>
</tr>
<tr><td>Site*</td>
<td><select name="pol_site">
<option>Nyarugenge</option>
</select></td>
<td>Rank*</td>
<td><select name="pol_rank" style="background-color:#2cd866; ">
<option>Admin</option>
<option>Employee</option>
</select></td>
</tr>
<tr><td><input type="button" value="Reg Client" style="background-image:url(file:///C|/wamp/www/GYM_M_S/images/banner.gif);"> </td></tr>
</table>
</body>
</html>
