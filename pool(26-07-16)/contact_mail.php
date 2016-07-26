<?php
session_start();
include 'config.php';

if($_POST["captcha"]==$_SESSION["captcha_code"]){
	
	$email=$_POST['cemail'];
    //echo $email;
	$pass=$_POST['cpass'];
	$msg=$_POST['cmsg'];
	
	$sql=mysqli_query($con,"INSERT INTO `contact` (`email`,`password`,`message`)VALUES('".$email."','".$pass."','".$msg."')");
	$email="info@pooledme.com";
	$to= $email;
            
                $subject= "Contact Us Entries";
				$message= "Email ID : <span style='color:red'>" .$email. "</span>.<br> Password : <span style='color:red'>" .$pass. "</span>.<br> Message : <span style='color:red'>" .$msg. "</span>";
			
				
			
			//	$message.= "Have fun and feel free to contact us for additional services.<br><br>";
			
				
			//	$headers = "MIME-Version: 1.0\r\n";
			//	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                
				$headers .= "Content-type: text/html; charset=utf-8"."\n";
			//	$headers .= "Content-Transfer-Encoding: 8bit"."\n";	
				//$headers .= "From: hrd@prestigepoint.in\r\n";
				mail($to, $subject, $message, $headers);
	
	echo "<script>document.getElementById('formIDc').reset();
		$('.errc').html('Form Submitted Succesfully');	</script>";
		
	//echo "Form Submitted Succesfully";
	//header('location:contactus.php?msg=Form Submitted Succesfully');
} 
else {
print "Please Enter Correct Captcha Code.";
}
?>