<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>GYM</title>
<link href="style/page.css" type="text/css" rel="stylesheet">

<script src="js/frame.js"></script>

 <?php include('includes/head.php'); ?> 

</head>
<body>
<center>
<div id="body">
<div id="content">
<div id="header"><img src="images/banner.png"></div>
<div id="menu">
<ul id="tablist"> 
					<li><a href="webpage_center.php" class="current style" onClick="return handlelink(this)">Home</a></li>
					<li><a href="about us.php" onClick="return handlelink(this)">About Us</a></li>
					<li><a href="contact us.php" onClick="return handlelink(this)">Contact Us</a></li>
					<li><a href="services.php" onClick="return handlelink(this)">Services</a></li>
					<li><a href="view_timetable.php" onClick="return handlelink(this)">Timetable</a></li>
					<li><a rel="facebox" href="login_interface.php"><font color ="#9f6118">Login</span></a></li>
				</ul>    	
			</div> 
			<div id="center">
			<div id="left_side">
			<iframe id="tabiframe" src="webpage_center.php" width="100%" height="100%" style="border: 0px;"></iframe>
			</div>
			<div id="right_side">
            <br/><br/>
			<font color="#39720b"><p><b>GYM MANAGEMENT SYSTEM</b></p></font><br/>
				<font color="#39720b"><b><font color="#39720b">DATE: </b>
				<script type="text/javascript">
<!--
	var currentDate = new Date()
	var day = currentDate.getDate()
	var month = currentDate.getMonth() + 1
	var year = currentDate.getFullYear()
	document.write("<b>" + day + "/" + month + "/" + year + "</b>")
//-->
</script>
<br/>     <br/>
<font color="#39720b"><b><font color="#39720b">TIME: </b>
<script type="text/javascript">
<!--
	var currentTime = new Date()
	var hours = currentTime.getHours()
	var minutes = currentTime.getMinutes()

	if (minutes < 10)
	minutes = "0" + minutes

	var suffix = "AM";
	if (hours >= 12) {
	suffix = "PM";
	hours = hours - 12;
	}
	if (hours == 0) {
	hours = 12;
	}

	document.write("<b>" + hours + ":" + minutes + " " + suffix + "</b>")
//-->
</script>
<br/>
			<p><img src="images/attachment.php.gif" /></p>
			<br/>
			<font color="#39720b"><br/><p>------------------<img src="images/1.png">----------------</p><br/> <br/>
            <font color="#000"><b>CLIENTS NUMBER::</b></font>
			  <?php
								include('connection.php');
								$qry = mysql_query("SELECT Count('cl_id') FROM client");

								while($row = mysql_fetch_array($qry)) {
								echo $row[0];
								}
							?>
			</div>
			</div>
			<div id="footer"><b>Copyright &copy; 2012 |
	Designed and Developed by John</b></div>
</div>
</div>
</center>
</body>
</html>
