<?php include('header.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">




            <div class="container">


                <form method="POST" action="../../EAS_FINAL/reports/listDistrict.php">
                                       <button id="save_voter" class="btn btn-success" name="save"> VIEW DISTRICT</button>
                </form>

              
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">


                    <thead>
                         <tr> <th>EMP ID</th><th>EMP FNAME</th><th>EMP LNAME</th></tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysql_query("SELECT * FROM  employees order by emp_id") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                            $id = $row['emp_id'];
                // echo out the contents of each row into a table
			    ?>
				<?php
                echo '<td>' . $row['emp_id'] . '</td>';
				echo '<td>' . $row['empFname'] . '</td>';
				echo '<td>' . $row['empLname'] . '</td>';
	 echo"<td > <a href ='district_edit.php?emp_id=$id'>";?><button type="button" name="Submit" onclick="return confirm('You Are Going to Update Record!!')"><img src="../../EAS_FINAL/images/edit.PNG"></button><?php print"</a></td>";
				/*echo"<td > <a href ='district_delete.php?dis_id=$id'>";?><button type="button" name="Submit" onclick="return confirm('You Are Going to Delete Record!!')"> <img src="../../PTCS1/employee/images/delete.png"></button><?php print"</a></td>";*/
				
                echo "</tr>"; } ?>

                    </tbody>
                </table>



            </div>
        </div>
    </div>
</div>



</body>
</html>


