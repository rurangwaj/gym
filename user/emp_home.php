<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>..GYM | management system</title>
<link href="style/page.css" type="text/css" rel="stylesheet">

<script src="js/frame.js"></script>
<center>
<div id="body">
<?php
	include('auth.php');
?>
<div id="content">
<div id="header"><img src="images/banner.png"></div>
<div id="menu">
<ul id="tablist"> 
					<li><a href="../admin/webpage_center_user.php" class="current style"onClick="return handlelink(this)">Home</a></li>
					<li><a href="all_cust_registration.php" onClick="return handlelink(this)">Registration</a></li>
					<li><a href="user_all_view/all_cust_view.php" onClick="return handlelink(this)">View</a></li>
					<li><a href="payments/all_payments.php" onClick="return handlelink(this)">Payment</a></li>
					<li><a href="report/all_user_report_view.php" onClick="return handlelink(this)">Report</a></li>
					<li><a href="../index.php"><font color ="#9f6118">Logout</span></a></li>
				</ul>    	
			</div> 
			<div id="center">
			<div id="left_side">
			<iframe id="tabiframe" src="../admin/webpage_center_user.php" width="100%" height="100%" style="border: 0px;"></iframe>
			</div>
			
			</div>
			<div id="footer"><b>Copyright &copy; 2013 |
	Designed and Developed by RURANGWA Jean</b></div>
</div>
</div>
</center>
</body>
</html>
