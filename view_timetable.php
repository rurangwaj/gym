<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="css/alter_color.css" type="text/css" rel="stylesheet">
</head>
<body>
<center>
<b><u>TIMATABLE</u></b>

<table style="width:500px ">
 <tr class="tr_head"> <th>ACTIVITY</th><th>FIRSTNAME</th><th>LASTNAME</th><th>PHONE</th><th>MONTH</th><th>YEAR</th>
<th>START.TIME</th><th>END.TIME</th>
<?php
        // connect to the database
        include('connection.php');

        // get results from database
        $result = mysql_query("SELECT  * FROM  monthly_tmt as m,activity as ac where ac.act_id=m.act_id ")
                or die(mysql_error());     
       
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
$id = $row['act_id'];
                // echo out the contents of each row into a table
			    ?><tr id="tr">
				<?php
                echo '<td>' . $row['actName'] . '</td>';
				echo '<td>' . $row['emp_fname'] . '</td>';
				 echo '<td>' . $row['emp_lname'] . '</td>';
				echo '<td>' . $row['emp_phone'] . '</td>';
				 echo '<td>' . $row['month'] . '</td>';
				echo '<td>' . $row['year'] . '</td>';
				echo '<td>' . $row['start_time'] . '</td>';
				echo '<td>' . $row['end_time'] . '</td>';
                echo "</tr>";
        }

        // close table>
      
?>
</table>

</center>
</body>
 <?php
 ?> 
