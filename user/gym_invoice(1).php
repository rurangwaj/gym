<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>gym management system</title>
</head>
<body>
<?php
	include('connection.php');	
	require_once('auth.php');
	$emp=$_SESSION['SESS_FIRST_NAME'];
		$qry1=mysql_query("select * from employees  where username='$emp'") or die(mysql_error());
	while($row1 = mysql_fetch_array($qry1))
	{
	$mp=$row1['empFname'];
	$emp=$row1['empLname'];
		}
	?>
	<?php
	include('connection.php');	
	$name= $_POST['cl_id'];
		$qry1=mysql_query("select * from client where cl_id='$name'") or die(mysql_error());
	while($row1 = mysql_fetch_array($qry1))
	{
	$na=$row1['clFname'];
	$nan=$row1['clLname'];
	}
	?>
	
	
<font size="2">
<center>
<div style="width:500px;height:650px;border:1px #000 solid">
<div style="float:left;width:250px;height:170px "><br/>
<img src="images/logo.png"><br/>
<font size="2"><b>Employee name:</b></font><br/>
<?php print"$mp--";print"$emp";?>
<br/>
<b>--------------------------------------</b><br/>
<font size="2"><b>Client name:</b></font><br/>
<?php print"$na--";print"$nan";?>
<hr/>
</div>
<div style="float:right;width:250px;height:170px "><font color="#990000" size="2"><b>INVOICE</b></font><br/><br/>
invoice number:<?php
echo(rand(10,100));
print"118SL";
?><br/>
Date:<?php
print strftime('%c');
?><br/>Phone:0783744743/0728744743<br/>Email:seven_lakes@co.uk<br/>
<b>Seven Lakes Ltd.</b><br/>
<hr/>
 <SCRIPT LANGUAGE="JavaScript">
  if (window.print)
    {
        document.write('<form><input type=button name=print value="Print" onClick="window.print()"></form>');
    }
function ctck()
{
     var sds = document.getElementById("dum");
     if(sds == null){
        alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
     var sdss = document.getElementById("dumdiv");
     if(sdss == null){
         alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
}
document.onload ="ctck()";


</script>

</div>
<div style="width:500px;height:620px ">
<table width="450px" border="0" cellpadding="4" cellspacing="1" class="table">
      <thead>
			<tr bgcolor="#50c81b">
			            <th width=\"5%\"> Activity name</th>
						<th width=\"5%\">Time pay</th>
						<th width=\"5%\"> S.Date</th>
						<th width=\"5%\"> E.Date</th>
						<th width=\"5%\">Amount</th>
						</tr>
			</thead>
			<tbody>
			<?php
	include('connection.php');	
	$name= $_POST['cl_id'];
	$qry=mysql_query(" select * from client as cl,payment as pe, activity as ac,duration as du where cl.cl_id=pe.cl_id 
	AND du.dur_id=pe.dur_id AND ac.act_id=du.act_id AND cl.cl_id='$name' AND pe.payDate= CURDATE()
	") or die(mysql_error());
	$to= 0;
	while($row = mysql_fetch_array($qry))
	{
	$id = $row['cl_id'];
	$total=$row['price'];
	$to+=$total;
		?>
	
	<?php
	echo '<td>' . $row['actName'] . '</td>';
			echo '<td>' . $row['durname'] . '</td>';
			echo '<td>' . $row['startDate'] . '</td>';
			echo '<td>' . $row['endDate'] . '</td>';
		echo '<td>' . $row['price'] .'Rwf'.'</td>';
	echo "</tr>"; } ?>
	
	</tbody>
	</table>
	<div style="width:150px;height:30px; background-color:#993333 ">Total Amount:<?php print"$to";print"Rwf";?></div>
</div>

<div style="width:500px;height:50px "><font color="#990000"><b>Seven Lakes</b></font></div>
</div>
</center>
</font>
</body>
</html>
