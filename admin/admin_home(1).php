<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>.. GYM | management system</title>
<link href="style/page.css" type="text/css" rel="stylesheet">

<script src="js/frame.js"></script>

 <?php include('includes/head.php'); ?> 

</head>
<body>
    <?php
	require_once('auth.php');
?>
<center>
<div id="body">
<div id="content">
<div id="header"><img src="images/banner.png"></div>
<div id="menu">
<ul id="tablist"> 
					<li><a href="webpage_center.php" class="current style"onClick="return handlelink(this)">Home</a></li>
					<li><a href="all_registration.php" onClick="return handlelink(this)">Registration</a></li>
					<li><a href="all_View/all_view.php" onClick="return handlelink(this)">View</a></li>
					<li><a href="updates/all_update.php" onClick="return handlelink(this)">Updates</a></li>
					<li><a href="report/all_report_view.php" onClick="return handlelink(this)">Report</a></li>
					<li><a href="../index.php"><font color ="#9f6118"> Logout</span></a></li>
				</ul>    	
			</div> 
			<div id="center">
			<div id="left_side">
			<iframe id="tabiframe" src="webpage_center.php" width="100%" height="100%" style="border: 0px;"></iframe>
			</div>
			
			</div>
			<div id="footer"><b>Copyright &copy; 2012 |
	Designed and Developed by John</b></div>
</div>
</div>
</center>
</body>
</html>
