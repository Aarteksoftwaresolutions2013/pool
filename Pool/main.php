<?php 
include 'config.php'; 
session_start();
//echo "hii";
if(isset($_POST['s_submit'])){

	$email=$_POST['s_email'];
    //echo $email;
	$pass=$_POST['s_password'];
	
	$sql=mysqli_query($con,"INSERT INTO personal_info (`email`,`password`)VALUES('".$email."','".$pass."')");
	header('location:index.php?$message="form successfully submitted you can login"');
}

if(isset($_POST['login'])){

  $email=$_POST['email'];
   $pass=$_POST['password'];
	
	$q=mysqli_query($con,"SELECT * FROM personal_info WHERE email='".$email."' AND password='".$pass."' ");
	$row_fetch=mysqli_fetch_assoc($q);
	$count=mysqli_num_rows($q);
	if($count>0){
	 $id=$row_fetch['id'];
	 $_SESSION['id']=$id;
	//$id=mysqli_insert_id($conn);
		
	header('location:user.php');	
	}
	else{
	header('location:index.php?loginerr="invalid user"');	
	}
}

if(isset($_POST['u_save'])){

  $fname=$_POST['fname'];
//echo "abc=". $fname;	
   $lname=$_POST['lname'];
    $txt=$_POST['txt'];
	 $city=$_POST['city'];
	  $state=$_POST['state'];
	   $zip=$_POST['zip'];
	    $number=$_POST['number'];
	     $select1=$_POST['select1'];
	      $select2=$_POST['select2'];
		
	$sql = 'UPDATE personal_info SET first_name="'.$fname.'" , last_name="'.$lname.'" , address="'.$txt.'", city="'.$city.'" , state="'.$state.'", zip="'.$zip.'", phone_no="'.$number.'", method_contact="'.$select1.'", time_contact="'.$select2.'" WHERE id="'.$_SESSION['id'].'"';
	$retval = mysqli_query($con,$sql);
	header('location:user.php?msg=Data Saved successfully');
	//echo "idd=".$id;
	
}



mysqli_close($con);
?>