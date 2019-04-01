<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 //Sanitize the POST values
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);

	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		$message=" Invarid UserName and PassWord try again!!!!";
 print"<script>window.alert(' $message');window.location='index.php';</script>";
		exit();
	}
 
	//Create query
   $qry="Select * from employees as emp,login as lo where emp.emp_id=lo.emp_id
   and lo.username='$username' and lo.password='$password'";
$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['login_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
			$_SESSION['CATEGORY'] = $member['function'];
						session_write_close();
			if($_SESSION['CATEGORY']=='admin'){
			 	header("location: admin/admin_home.php");
			}
			else if($_SESSION['CATEGORY']=='employee')
			{
			 			header("location: employee/emp_home.php");
			}
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				$message=" Invalid UserName and PassWord try again!!!!";
 print"<script>window.alert(' $message');window.location='index.php';</script>";
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>