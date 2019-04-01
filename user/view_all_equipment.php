<?php include('header.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">




            <div class="container">


                <form method="POST" action="user_all_view/all_cust_view.php">
                    <input type="hidden" name="id_excel" value="<?php echo $id_excel; ?>">
                    <button id="save_voter" class="btn btn-success" name="save">Back to main page</button>
                </form>

              
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">


                    <thead>
                        <tr>
                            <th>EQU NAME</th>
							<th>QUANTITY</th>
                           	<th>PRICE</th>
							<th>T.PRICE</th>
							<th>SUPPLIER</th>
							<th>QUALITY</th>
                           	<th>PURCHASED DATE</th>
							<th>MAINTANANCE DATE</th>
							<th>SPORT</th>
						</tr>
                    </thead>
                    <tbody>
                      <?php
                        $query = mysql_query("SELECT * FROM   sports as sp, equipment as e where sp.sport_id=e.equip_id ") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                $id = $row['equip_id'];
                // echo out the contents of each row into a table
			    ?><tr id="tr">
				<?php
			echo '<td>' . $row['equipName'] . '</td>';
			echo '<td>' . $row['quantity'] . '</td>';
			echo '<td>' . $row['price'] . '</td>';
			echo '<td>' . $row['price']* $row['quantity']. '</td>';
			echo '<td>' . $row['supplier'] . '</td>';
			echo '<td>' . $row['quality'] . '</td>';
			echo '<td>' . $row['purchaseDate'] . '</td>';
			echo '<td>' . $row['maintainceDate'] . '</td>';
			echo '<td>' . $row['sportName'] . '</td>';
          
			
			 
								echo "</tr>"; } ?>



                    </tbody>
                </table>



            </div>
        </div>
    </div>
</div>



</body>
</html>


