<?php
include('connection.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$clFname=$_POST['clFname'];
			$clLname=$_POST['clLname'];
			$gender=$_POST['gender'];
			$age=$_POST['age'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$address1=$_POST['address1'];
			$address2=$_POST['address2'];
			   $location="photos/" . $_FILES["image"]["name"];
							if (!preg_match('/^([0]7)?[0-9]{8}$/i',$phone) ) {
$error=" you entered the invalid phone number, Please verify it, then try again!";
print"<script>window.alert('$error');window.location='client_registration.php';</script>";
}
 else{
  $phone1="+25".$phone;
 $select=mysql_query("select * from client where phone='$phone1'")or die(mysql_error());
if(mysql_num_rows($select))
{
$message="Client already exist!!";
 print"<script>window.alert(' $message');window.location='client_registration.php';</script>";
 ?>
<?php
}
elseif($age>="16"){
			//$save=mysql_query("INSERT INTO criminal_record (location, caption) VALUES ('$location','$caption')");
			$save=mysql_query("INSERT INTO  client(clFname,clLname,gender,age,phone,email,
			address1,address2,reg_date,location)
			VALUES ('$clFname','$clLname','$gender','$age','$phone','$email','$address1','$address2',NOW(),'$location')");
			$message="you successfully added new Client!!";
 print"<script>window.alert(' $message');window.location='client_registration.php';</script>";
}
else{
$message="your are not allowed to be registered to this system ,because your ages is less than 16!!";
 print"<script>window.alert(' $message');window.location='client_registration.php';</script>";
 }
}
}

 ?>