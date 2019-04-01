<?php 
 /*
 * connect to the database 
 * @username   database user name
 * @passowrd   database password
 */
@session_start();
$username = 'root';  //database user name variable
$password ='';       //database password
$host ='localhost';

$databasename = 'nfucip';

	$conn = mysql_connect($host, $username, $password);
	if (!$conn)
    {
		die('Could not connect: ' . mysql_error());
	}
//select database name and connect 

	mysql_select_db($databasename, $conn)
	or die ("could not select database");
?>
