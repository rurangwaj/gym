<?php
include('connection.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$fname=$_POST['empFname'];
			$lname=$_POST['empLname'];
			$uname=$_POST['username'];
			$pwd=$_POST['password'];
			$bdate=$_POST['birthDate'];
			$cation=$_POST['qualification'];
			$gender1 =$_POST['gender'];
			$phone1=$_POST['phone'];
			$email1=$_POST['email'];
			$cell_id=$_POST['cell'];
              $function1=$_POST['function'];
			   $location="photos/" . $_FILES["image"]["name"];
							if (!preg_match('/^([0]7)?[0-9]{8}$/i',$phone1) ) {
$error=" you entered the invalid phone number, Please verify it, then try again!";
print"<script>window.alert('$error');window.location='employee_registration.php';</script>";
}
 else{
  $phone1="+25".$phone1;
 $select=mysql_query("select * from employees where phone='$phone1'")or die(mysql_error());
if(mysql_num_rows($select))
{
$message="Employee already exist!!";
 print"<script>window.alert(' $message');window.location='employee_registration.php';</script>";
 ?>
<?php
}
else{
			//$save=mysql_query("INSERT INTO criminal_record (location, caption) VALUES ('$location','$caption')");
			$save=mysql_query("INSERT INTO  employees(empFname,empLname,username,password,birthDate,joinDate,qualification,gender,
			phone,email,cell_id,function,location)
			VALUES ('$fname','$lname','$uname','$pwd','$bdate',NOW(),'$cation','$gender1','$phone1','$email1','$cell_id','$function1','$location')");
			$message="you successfully added new employee!!";
 print"<script>window.alert(' $message');window.location='employee_registration.php';</script>";

 }
}
}
 ?>