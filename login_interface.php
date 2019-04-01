<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Hello!</title>
  <style>
  .user_h{

  border: 1px solid #7fdb08;
height: 30px;
font-size: 15px;
color: #336a33;
padding: 0 5px;}
  </style>
  <style>
  .pass_h{

  border: 1px solid #7fdb08;
height: 30px;
font-size: 15px;
color: #336a33;
padding: 0 5px;}
  </style>
</head>

<body>

		<h1 align="center"><label>Login</label></h1><br/>
	 <form action="login_exec.php" method="POST" >
		<table align="center">
			<tr>
				<td><label>Username:</label></td>
				<td><input type="text" name="username" class="user_h" placeholder="username" /></td>
			</tr>
			<tr>
				<td><label>Password:</label></td>
				<td><input type="password" name="password" class="pass_h" placeholder="password" /></td>
			</tr>
			<tr>
				<td></td>
				<td><button><img src="images/submit.png"></button></td>
			</tr>
		</table>
	</form>


</body>

</html>
