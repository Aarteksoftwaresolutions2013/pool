<?php session_start();
if(!isset($_SESSION['id'])){
	
	header('location:index.php?herr1=User Needs to Login First to Create a Pool project#modal-one');
}
include 'config.php'; 
//include "main.php";
//echo "abc=".$_SESSION['id'];	

if(isset($_POST['cp_save'])){

  $title=$_POST['title'];
//echo "abc=". $fname;	
  //$image=$_FILES['sfile'];
	//echo $image;	
    $date=$_POST['date'];
	 $pamount=$_POST['pamount'];
	 $bank_name=$_POST['bank_name'];
	  $mamount=$_POST['mamount'];
	   $services=$_POST['services'];
	    $mcontact=$_POST['mcontact'];
	     $amount=$_POST['amount'];
	     $login_id=$_SESSION['id'];
	
	      //$select2=$_POST['select2'];
	
	function generate_random_password($length = 6) {
    $alphabets = range('A','Z');
    $numbers = range('0','9');
    $additional_characters = array('_','.','/','^');
    $final_array = array_merge($alphabets,$numbers,$additional_characters);
         
    $password = '';
  
    while($length--) {
      $key = array_rand($final_array);
      $password .= $final_array[$key];
    }
  
    return $password;
  }
	

	$password=generate_random_password(6);
	//echo "password=".$password;
	$_SESSION['pass']=$password;
 $pop=mysqli_query($con,"SELECT * FROM create_pool WHERE ` project_identifier`='".$password."'");
	$row_fetch=mysqli_fetch_assoc($pop);
$countt=mysqli_num_rows($pop);
		//echo "idd=".$countt;
 
	//die();
	
	

if(isset($_FILES['sfile'])){
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["sfile"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 $img= $_FILES["sfile"];
		 $image=rand(100,900)."_".$img['name'];
   
 // Check if image file is a actual image or fake image
 $check = getimagesize($_FILES["sfile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
   // echo "";
	$image_err1="Sorry, uploaded image already exists.";
	 $uploadOk = 0;
	echo " <script>window.location = 'create_pool.php?image_err1=".$image_err1."';</script> ";
	//return($image_err1);
	return false;
}
// Check file size
if ($_FILES["sfile"]["size"] > 500000) {
	$image_err1="Sorry, your uploaded image is too large.";
    $uploadOk = 0;
		echo " <script>window.location = 'create_pool.php?image_err1=".$image_err1."';</script> ";
	return false;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
	$image_err1="Sorry, only JPG, JPEG, PNG & GIF image are allowed.";
	echo " <script>window.location = 'create_pool.php?image_err1=".$image_err1."';</script> ";
	return false;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	$image_err1="Sorry, your uploaded image file was not uploaded.";
		echo " <script>window.location = 'create_pool.php?image_err1=".$image_err1."';</script> ";
	return false;
// if everything is ok, try to upload file
} else {
   // if (move_uploaded_file($_FILES["sfile"]["tmp_name"], $target_file,rand(100,900)."_")) {
    if(move_uploaded_file($_FILES['sfile']['tmp_name'], $target_dir.$image)){

		//$image_err1="The uploaded image file ". basename( $_FILES["sfile"]["name"]). " has been uploaded.";
			$image_err1="New POOL Created Successfully.";
		echo " <script>window.location = 'create_pool.php?image_err1=".$image_err1."';</script> ";
	
    } else {
      
		$image_err1="Sorry, there was an error uploading your image.";
		echo " <script>window.location = 'create_pool.php?image_err1=".$image_err1."';</script> ";
	return false;
    }
}

}
		 
	
  if($countt<1){
 
	$sql=mysqli_query($con,"INSERT INTO `create_pool` (`login_id`,`title`,`image`,`pool_close_date`,`pool_amount`,`bank_name`,`min_pool_amount`,`option_services`,`method_of_contact`,`pool_funds`,` project_identifier`)VALUES('".$login_id."','".$title."','".$image."','".$date."','".$pamount."','".$bank_name."','".$mamount."','".$services."','".$mcontact."','".$amount."','".$password."')");		
	header('location:create_pool.php?pid='.$password.'#modal-four');
	//echo "idd=".$password;
	
 }
	else{
		
	generate_random_password(6);
		
	}

	
	
}

if(isset($_GET['pid'])){
	
	//echo "piiiiiiid=". $_GET['pid'];
	
	$q=mysqli_query($con,"SELECT * FROM create_pool  WHERE ` project_identifier`'".$_GET['pid']."' ");
	$row_fetch=mysqli_fetch_assoc($q);
	$count=mysqli_num_rows($q);
	if($count>0){
		
	 $email=$row_fetch['email'];
		
	$to= $email;
            
                $subject= "POOL project";
				$message= "Congratulations on opening your POOL project titled<span style='color:red'>" .$row_fetch['title']. "</span>. Your POOL project ID is<span style='color:red'>" .$_GET['pid']. "</span>. This ID can be used to locate/contribute to your project. In addition, the link below can be used for the same purposes.

http://create_pool.php?<span style='color:red'>" .$_GET['pid']. "</span>";
			
				$message .= "POOL by Phone Services: 1-800-XXX-XXXX <br><br>";
			
				$message.= "Have fun and feel free to contact us for additional services.<br><br>";
			
				
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                
				$headers .= "Content-type: text/html; charset=utf-8"."\n";
				$headers .= "Content-Transfer-Encoding: 8bit"."\n";	
				$headers .= "From: hrd@prestigepoint.in\r\n";
				@mail($to, $subject, $message, $headers);
		
	//echo "Email sent";
	
		
	}

	
	
	
}

/*
if(isset($_POST['form_submit'])){

	$aname=$_POST['account_name'];
    //echo $email;
	$bname=$_POST['bank_name'];
	$rno=$_POST['routing_no'];
	$ano=$_POST['account_no'];
	$atype=$_POST['account_type'];
	//$date=date("m/d/y G.i:s<br>", time()); 
	$date=date("m/d/y G:i:s"); 
	
	$sql=mysqli_query($con,"INSERT INTO create_pool_popup (`account_nickname`,`name_of_bank`,`routing_number`,`account_number`,`account_type`,`timestamp`)VALUES('".$aname."','".$bname."','".$rno."','".$ano."','".$atype."','".$date."')");
	//header('location:create_pool.php?#');
}*/


    $q1=mysqli_query($con,"SELECT * FROM create_pool_popup WHERE login_id='".$_SESSION['id']."'");
	/*$row_fetch1=mysqli_fetch_assoc($q1);
echo $row_fetch1['account_nickname'];*/
$p4=mysqli_query($con,"SELECT * FROM personal_info WHERE id='".$_SESSION['id']."' ");
	$row_fetch4=mysqli_fetch_assoc($p4);
	$count4=mysqli_num_rows($q);


	
	$p5=mysqli_query($con,"SELECT * FROM create_pool  WHERE ` project_identifier` ='".$_SESSION['pass']."' ");
	$row_fetch5=mysqli_fetch_assoc($p5); 
   // echo $_SESSION['pass'];
   // echo $row_fetch5['title'] ; 
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Slider - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.css"/>
         <link rel="stylesheet" href="css/build.css"/>
 <link href="css/my_css.css" rel="stylesheet">
	<script src="js/ajax.js" type="text/javascript" charset="utf-8">
	</script>
	 <script src="js/jquery.min.js"></script>
	
   <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
  
	<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#formID3").validationEngine(
    'attach', {
        
        maxErrorsPerField: 1
    }
);
			
			 $("#submit3").on('click', function () {
            var valid = $("#formID3").validationEngine('validate');
           

            if (valid == true) {

           return true;

            } else {
               
				$('#formID3').validationEngine(
						'attach', {
							
							maxErrorsPerField: 1
						}
					);
				 

            }
        });
			
			
			jQuery("#formID4").validationEngine(
    'attach', {
        
        maxErrorsPerField: 1
    }
);
			
			 $("#submit4").on('click', function () {
            var valid = $("#formID4").validationEngine('validate');
           

            if (valid == true) {
				
           var	Data1 = $("#formID4").serialize();
			//console.dir(Data1);
			//$("formID4").find("input[type=text], textarea").val("");
	         popup11(Data1);
			 document.getElementById('formID4').reset();
		     $('#amount1').click();
				
           return true;

            } else {
              
				$('#formID4').validationEngine(
						'attach', {
							
							maxErrorsPerField: 1
						}
					);
				  event.preventDefault();
            }
        });
			
			
		});
		
	
		</script>
	
	<script>
		$(document).ready( function() {
			
		$('#amount2').on('click',function(){		
			//alert("radio2 selected");
			$("#banking").css("display", "none");
			
			window.location = 'create_pool.php#modal-three';
			
	
			});	
			
		$('#amount1').on('click',function(){		
		//	alert("radio1 selected");
			$("#banking").css("display", "block");
			});	
		
			
			
	
		
		});
		</script>
</head>

<body>

   <?php include "header.php"; ?>

<div class="wrap">

  
</div>
 
<!-- Modal -->
<!-- Modal4 -->
<a href="#" class="modal" id="modal-four" aria-hidden="true">
  </a>
  <div class="modal-dialog modal-dialog12 ">
    <div class="modal-header">
      
      <a href="#" class="btn-close" aria-hidden="true">×</a>
    </div>
    <div class="modal-body">
    <h2 style='color:#03B3ED'>Confirmation</h2>
     <div id="my-tab-content" class="tab-content" style="margin-top: 3%;">
		 <?php if(isset($_GET['pid'])){ ?>
       <div class="form-group">
		   
		   <p style="font-size: 15px;font-family: arial;line-height: 1.5;"> Congratulations on opening your POOL project titled <span style='color:#03B3ED'><?php echo $row_fetch5['title'] ;?></span> . Your POOL project ID is <span style='color:#03B3ED'><?php echo $_GET['pid'];?></span> . This ID can be used to locate/contribute to your project. In addition, the link below can be used for the same purposes.

http://create_pool.php?<span style='color:#03B3ED'><?php echo $_GET['pid']; ?> </span><br><br>POOL by Phone Services: 1-800-XXX-XXXX </p>
		  
        </div> 
    <div class="modal-footer">
    <a href="user.php?id=<?php echo $_GET['pid']; ?>" class="btn">Close</a>
    </div> 
		 <?php } ?>
</div>
    </div>
    
  </div>

<!-- /Modal4 -->
	
	
	
	
	
	<!-- Modal3 -->
	<a href="#" class="modal" id="modal-three" aria-hidden="true">
  </a>
  <div class="modal-dialog modal-dialog11">
    <div class="modal-header">
      
      <a href="#" class="btn-close" aria-hidden="true">×</a>
    </div>
    <div class="modal-body" style="padding-top: 0;">
    <h2 style="padding-top: 0;">Form</h2>
	<?php 	//echo "abc=".$_SESSION['id'];	?>
     <div id="my-tab-content" style="margin-top: 0;" class="tab-content">
		 <div class="col-lg-12"> 
       <form action="" method="post" id="formID4" name="formID4"class="formular">
					<span class="err" id="a_err"><?php if(isset($_GET['$message'])){ echo $_GET['$message'];} ?><br></span><br>
                        <div class="col-lg-6">

                        <div class="form-group">
                        <label class="lbl"> Account Nickname</label>
    <input type="text" placeholder="Title" name="account_name" class="validate[required] form-control" id="usr41" >
</div>
</div>
<div class="col-lg-6">

                        <div class="form-group">
                        <label class="lbl">Name of Bank</label>
    <input type="text" placeholder="Title" name="bank_name" class="validate[required] form-control" id="usr42" >
</div>
</div>
<div class="col-lg-6">

                        <div class="form-group">
                        <label class="lbl">Routing Number</label>
    <input type="text" placeholder="Title" name="routing_no" class="validate[required] form-control" id="r_number" >
</div>
</div>
		   <div class="col-lg-6">

                        <div class="form-group">
                        <label class="lbl">Routing Number Confirmation</label>
    <input type="text" placeholder="Title" class="validate[required,equals[r_number]] form-control" id="usr44" >
</div>
</div>
		  <div class="col-lg-6">

                        <div class="form-group">
                        <label class="lbl">Account Number</label>
    <input type="text" placeholder="Title" name="account_no" class="validate[required] form-control" id="ac_number" >
</div>
</div>
		  <div class="col-lg-6">

                        <div class="form-group">
                        <label class="lbl">Account Number Confirmation</label>
    <input type="text" placeholder="Title" name="" class="validate[required,equals[ac_number]] form-control" id="usr46" >
</div>
</div>
		  <div class="col-lg-6">

                        <div class="form-group">
                        <label class="lbl">Account Type</label>
    <input type="text" placeholder="Title" name="account_type" class="validate[required] form-control" id="usr47" >
</div>
</div>
		   
 <div class="col-lg-12">
<div class="form-group" style="width:50%;margin: 0 auto;">
   <a href="#" class="btn-close" aria-hidden="true"><input type="button" id="submit4" name="form_submit"  class="submit btn btn-info" value="Submit"></a>
</div>
        </div>         		   	   
   </form>   
   </div> 
</div>
    </div>
   
  </div>

<!-- /Modal3 -->
	
<div class="container-fluid user">
  <div class="container usercontent">

        <div class="row">

            

            <div class="col-md-9 userform createpool">

                <div class="row carousel-holder">
  
  
                    <div class="col-md-12">
                      <div class="col-md-12">  <h2>create a pool </h2></div>
						   <span class="image_err1" id="image_err1"><?php if(isset($_GET['image_err1'])){ echo $_GET['image_err1'];}?></span>
  <form action="" method="post" id="formID3" class="formular" enctype="multipart/form-data" >
<div class="col-lg-6">

                        <div class="form-group">
                        <label> Title</label>
    <input type="text" placeholder="Title" name="title" class="validate[required] form-control" id="usr31" >
</div>
</div>

<div class="col-lg-6 ">
                        <div class="form-group">
                        <label>Upload Image</label>
       <input id="uploadFile" placeholder="Choose File" disabled="disabled" class="form-control" id="usr3" />
<div class="fileUpload btn btn-primary">
    <span>Upload</span>
    <input id="uploadBtn" type="file" name="sfile"  class="validate[required] upload" />
</div>
    
</div>
</div>
<div class="col-lg-6">
                        <div class="form-group">
                        <label>Pool Close Date</label>
                      
                    <input type="date" placeholder="Pool Close Date" name="date" class="validate[required] form-control" id="usr32" >
</div>
</div>
<div class="col-lg-6 nopad ">
<div class="col-lg-6 ">
                        <div class="form-group">
                        <label>Pool Amount</label>
    <input type="text" placeholder="Pool Amount" name="pamount" class="validate[required] form-control" id="usr33" >
</div>
</div>

<div class="col-lg-6 ">
                        <div class="form-group">
                        <label>Minimum Pool Amount </label>
    <input type="text" placeholder="Minimum Pool Amount" name="mamount" class="validate[required] form-control" id="usr34" >
    <span>For Each Participant</span>
</div>
</div>
</div>

<div class="col-lg-6">
                        
                        
                        <div class="form-group">
                        <label>Option Services</label>
                          <select class="validate[required] form-control" name="services" id="services">
    <option selected>None</option>
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Both</option>
  </select>
   
</div>
                        

</div>

<div class="col-lg-6">
                        
                        
                        <div class="form-group">
                       <label>Prefered Method of Contact</label>
                        <select class="validate[required] form-control" name="mcontact" id="mcontact">
    <option value="" selected> PREFERED METHOD OF CONTACT</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
                         
   
</div>
                        

</div>

<div class="col-lg-6">
                        <div class="form-group">
                         <label>Where do you want the pool funds sent to</label>
                         
                    
                     <div class="radio radio-info radio-inline">
                        <input type="radio" id="amount1" value="option1" name="amount" checked>
                        <label for="inlineRadio1"> Saved Banking </label>
                    </div>
                    <div class="radio radio-inline">
                        <input type="radio" id="amount2" value="option2" name="amount">
                        <label for="inlineRadio2"> Add New </label>
                    </div>
					<br><br>		
                <select class="validate[required] form-control" name="bank_name" id="banking">
    <option selected> Saved Banking </option>
	<?php  while($row_fetch=mysqli_fetch_assoc($q1)){ if($row_fetch['account_nickname']!=""){?>				
    <option><?php echo $row_fetch['account_nickname']; ?></option>
	<?php } } ?>				
   
  </select>
                                
   
</div>
</div>
	 
</div>





<div class="col-lg-6 usercontact">
			<div class="col-lg-4 usercontact nopaddleft nopaddright">
			<p>
                     <input type="submit" class="submit submit3 btn btn-default btn-lg usersubbtn" name="cp_save" id="submit3" value="SUBMIT">
	<!--<a class="btn btn-default btn-lg usersubbtn" href="#">SUBMIT</a>-->
                </p>
                
                </div>
                <div class="col-lg-5 usercontact  nopaddleft nopaddright">
                <p>
                   	<input type="reset" value="CLEAR" class="btn btn-default btn-lg userreset" >
					<!--<a class="btn btn-default btn-lg userreset" href="#">CLEAR</a>-->
                </p>
                </div>
        </div>
                
                             
                   
                    
     
</div>
                </div>

                

            </div>

        </div>

    </div>
</div><!-- /Modal -->


       
    <!-- /.container -->
  <?php include "footer.php"; ?>
    <!-- jQuery -->
  

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<script>    
    document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
    </script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
 <!-- !Developed and design by rajnisonkar.com -->
</body>

</html>
