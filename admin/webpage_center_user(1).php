<!DOCTYPE html>
<?php
	require_once('connection.php');
	require_once('auth.php');
	$emp_id=$_SESSION['SESS_MEMBER_ID'];
	?>
<html>
<head>
<style> 
div
{
border:15px solid transparent;
width:250px;
padding:10px 20px;
}

#round
{
-webkit-border-image:url(border.png) 30 30 round; /* Safari 5 and older */
-o-border-image:url(border.png) 30 30 round; /* Opera */
border-image:url(../admin/border.png) 30 30 round;
}

#stretch
{
-webkit-border-image:url(border.png) 30 30 stretch; /* Safari 5 and older */
-o-border-image:url(border.png) 30 30 stretch; /* Opera */
border-image:url(../admin/border.png) 30 30 stretch;
}
</style>
<link href="../admin/style/page.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="webpage_center">
<div id="webpage_center_left">
<center>
<br/>
<div style="background-image:url(../admin/images/page_center.png);width:530px;height:390px;border:1px #000 solid">
<br/>
<div id="stretch"><b><h3>WELCOME EMPLOYEE</h3></b></div>
<br/>
<div style="width:405px;height:200px;border:1px #000 solid ">
<div style="width:150px;height:150px;float:right;border:1px #000 solid ">
 <?php 
	 $query=mysql_query("SELECT * FROM employees where emp_id=$emp_id")or die(mysql_error());
	 while($row=mysql_fetch_array($query)){
	 ?>
    <img src="<?php echo $row['location']; ?>" width="160px" height="160px" alt="" class="img-rounded">
	<?php 
	}
	?>
</div>
<div style="width:150px;height:150px;float:left;border:1px #000 solid ">
<br/><br/>
<font color="#000000"><b>Hello :: </b></font> <?php if(isset($_SESSION['USER1'])){echo ' '.htmlentities($_SESSION['USER1'], ENT_QUOTES, 'UTF-8');} ?>
	<br/>
	<?php if(isset($_SESSION['USER'])){echo ' '.htmlentities($_SESSION['USER'], ENT_QUOTES, 'UTF-8');} ?>
	<br/>
<font color="#000000"><b>You are</b></font><?php if(isset($_SESSION['CATEGORY'])){echo ' '.htmlentities($_SESSION['CATEGORY'], ENT_QUOTES, 'UTF-8');} ?>

</div>
</div>
</center>

</div>
<div id="webpage_center_right">
<center>
<font color="#39720b"><p><b>GYM MANAGEMENT SYSTEM</b></p></font><br/>
				<font color="#39720b"><b><font color="#39720b">DATE: </b>
				<script type="text/javascript">
var currentDate = new Date()
	var day = currentDate.getDate()
	var month = currentDate.getMonth() + 1
	var year = currentDate.getFullYear()
	document.write("<b>" + day + "/" + month + "/" + year + "</b>")

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
			<p><img src="../admin/images/attachment.php.gif" /></p>
			<br/>
			<font color="#39720b"><br/><p>------------------------------------------------------<br/>---------
			<img src="../images/1.png">---------</p><br/> <br/>
            <font color="#000"><b>CLIENTS NUMBER::</b></font>
			  <?php
								include('connection.php');
								$qry = mysql_query("SELECT Count('cl_id') FROM client");

								while($row = mysql_fetch_array($qry)) {
								echo $row[0];
								}
							?>
			</center>
			</div>

</div>
</div>
</body>
</html>