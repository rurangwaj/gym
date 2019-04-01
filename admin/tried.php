<?php include('header.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">




            <div class="container">


                <form method="POST" action="#">
                                       <button id="save_voter" class="btn btn-success" name="save"> VIEW RESIGNATED EMPLOYEE</button>
                </form>

              
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">


                    <thead>
                         <tr> <th>ID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>PhoneNumber</th><th>Maritial Status</th><th>Resignation Date</th><th>Resignation Reason</th></tr>

                    </thead>
                    <tbody>
                        <?php
                        $query = mysql_query("SELECT * FROM   employees as em,resignation as re where em.emp_id=re.emp_id order by em.emp_id") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                 $id = $row['emp_id'];
                // echo out the contents of each row into a table
			    ?><tr id="tr">
				<?php
                echo '<td>' . $row['emp_id'] . '</td>';
				echo '<td>' . $row['emp_firstname'] . '</td>';
				 echo '<td>' . $row['emp_lastname'] . '</td>';
				echo '<td>' . $row['emp_email'] . '</td>';
				 echo '<td>' . $row['emp_phonenumber'] . '</td>';
				echo '<td>' . $row['emp_marital_status'] . '</td>';
				 echo '<td>' . $row['res_date'] . '</td>';
				echo '<td>' . $row['res_observation'] . '</td>';
				               				echo "</tr>"; } ?>

                    </tbody>
                </table>



            </div>
        </div>
    </div>
</div>



</body>
</html>


