<?php session_start();
if(!isset($_SESSION['id'])){
	
	header('location:index.php');
}

else{
	
	include "config.php";

	
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
		
	$sql = 'UPDATE personal_info SET first_name="'.$fname.'" , last_name="'.$lname.'" , address="'.$txt.'", city="'.$city.'" , state="'.$state.'", zip="'.$zip.'", phone_no="'.$number.'", method_contact="'.$select1.'", time_contact="'.$select2.'" WHERE id="'.$_SESSION['id'].'" ';
	$retval = mysqli_query($con,$sql);

	//header('location:user.php?msg=Data Saved successfully');

		
}

		$ppp=mysqli_query($con,"SELECT * FROM personal_info WHERE id='".$_SESSION['id']."' ");
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
   <link href="css/my_css.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.min.js"></script>
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
 
	
   <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
  
	<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine(
    'attach', {
        
        maxErrorsPerField: 1
    }
);
			
			 $("#submit").on('click', function () {
            var valid = $("#formID").validationEngine('validate');
           

            if (valid == true) {

           return true;

            } else {
               
				$('#formID').validationEngine(
						'attach', {
							
							maxErrorsPerField: 1
						}
					);
            }
        });
			
			
			 
		});
		
	
		</script>

</head>

<body>

    <?php include "header.php"; ?>

<div class="wrap">

  
</div>
 
<!-- Modal -->
	<?php
	
	
	while($row_fetch=mysqli_fetch_assoc($ppp)){
		
	
	?>
	
	
<div class="container-fluid user">
  <div class="container usercontent">

        <div class="row">

            <div class="col-md-3">
                <div class="list-group">
                    <a href="#PERSONALINFORMATION" data-toggle="tab" class="list-group-item active">PERSONAL INFORMATION </a>
                    <a href="#TRANSACTIONS" data-toggle="tab" class="list-group-item">TRANSACTIONS</a>
                    <a href="#" data-toggle="tab" class="list-group-item">PROJECTS</a>
                                        <a href="#" data-toggle="tab" class="list-group-item">BANK ACCOUNTS</a>
                </div>
            </div>

            <div class="col-md-9 userform">

                <div class="row carousel-holder">
  <div class="tab-content">
   <div id="PERSONALINFORMATION" class="tab-pane fade in active">
                    <div class="col-md-12">
                      <div class="col-md-12">  <h2>MY PERSONAL INFORMATION </h2></div>
        <form method="post" action="" id="formID" class="formular">  
		<span class="msg"><?php if(isset($_GET['msg'])){ echo $_GET['msg'];}?><br></span><br>
           
<div class="col-lg-6">
                        <div class="form-group">
                        <label>First Name</label>
    <input type="text" name="fname" class="validate[required] form-control" placeholder="First Name" value="<?php
		
		if(isset($row_fetch['first_name']))
		   {
			echo $row_fetch['first_name'];
		}
		else{ 
			echo "";}
		 ?>" id="usrname" >
</div>
</div>

<div class="col-lg-6">
                        <div class="form-group">
                                                <label>Last Name</label>
    <input type="text" class="validate[required] form-control"  name="lname" placeholder="Last Name" value="<?php
		
		if(isset($row_fetch['last_name']))
		   {
			echo $row_fetch['last_name'];
		}
		else{ 
			echo "";}
		 ?>" id="usr" >
</div>
</div>
<div class="col-lg-12">
                        <div class="form-group">
                        <label>Address</label>
                        <textarea class="validate[required] form-control" value=""  name="txt" placeholder="Address" rows="3" id="comment"><?php
		
		if(isset($row_fetch['address']))
		   {
			echo $row_fetch['address'];
		}
		else{ 
			echo "";}
		 ?></textarea>
    
</div>
</div>

<div class="col-lg-6">
                        <div class="form-group">
                        <label>City</label>
    <input type="text" value="<?php
		
		if(isset($row_fetch['city']))
		   {
			echo $row_fetch['city'];
		}
		else{ 
			echo "";}
		 ?>" name="city" placeholder="City" class="validate[required] form-control" id="usrcity" >
</div>
</div>
<div class="col-lg-6">
                        <div class="form-group">
                        <label>State</label>
    <input type="text" value="<?php
		
		if(isset($row_fetch['state']))
		   {
			echo $row_fetch['state'];
		}
		else{ 
			echo "";}
		 ?>"  name="state" placeholder="State" class="validate[required] form-control" id="usrstate" >
</div>
</div>

<div class="col-lg-6">
                        <div class="form-group">
                        <label>Zip</label>
    <input type="text" value="<?php
		
		if(isset($row_fetch['zip']))
		   {
			echo $row_fetch['zip'];
		}
		else{ 
			echo "";}
		 ?>" name="zip" placeholder="Zip" class="validate[required] form-control" id="usrzip" >
</div>
</div>
<div class="col-lg-6">
                        <div class="form-group">
                        <label>Cell Phone Number</label>
    <input type="text" value="<?php
		
		if(isset($row_fetch['phone_no']))
		   {
			echo $row_fetch['phone_no'];
		}
		else{ 
			echo "";}
		 ?>" name="number" class="validate[required,custom[phone],minSize[10],maxSize[12]] form-control" id="usrno"  placeholder="Cell Phone Number" >
</div>
</div>
<div class="col-lg-6">
                        <div class="form-group">
                        <label>Preferred Method of Contact</label>
                          <select class="validate[required] form-control"  value="" id="sel1" name="select1">
                          
    <option selected><?php
		
		if(isset($row_fetch['method_contact']))
		   {
			echo $row_fetch['method_contact'];
		}
		else{ 
			echo "Preferred Method of Contact";}
		 ?></option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
   
</div>
</div>

<div class="col-lg-6">
                        <div class="form-group">
                        <div class="form-group">
<label>Preferred Time of Contact</label>
  <select class="validate[required] form-control" value="" id="sel2"  name="select2">
  
    <option selected><?php
		
		if(isset($row_fetch['time_contact']))
		   {
			echo $row_fetch['time_contact'];
		}
		else{ 
			echo "Preferred Time of Contact";}
		 ?></option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>

</div>
</div>

<div class="col-lg-6 usercontact">
<div class="col-lg-4 usercontact nopaddleft nopaddright">
<p>
                  
	        <input type="submit" class="submit btn btn-default btn-lg usersubbtn" name="u_save" id="submit" value="Save">
	    <!--  <a class="btn btn-default btn-lg usersubbtn"  name="u_save" href="#">hSAVE</a>-->
                </p>
                
                </div>
                <div class="col-lg-5 usercontact  nopaddleft nopaddright">
                <p>
						<input type="reset" value="RESET" class="btn btn-default btn-lg userreset" >
                  <!--  <a class="btn btn-default btn-lg userreset" href="#">RESET</a>-->
                </p>
                </div>
                </div>
             </form>   
                    </div>
                    </div>
                    
                    
                    <div id="TRANSACTIONS" class="tab-pane fade">
                    <div class="col-md-12">
                      
                    
<div class="col-lg-6">
                        <div class="form-group">
    <input type="text" name="" placeholder="FIRST NAME" class="form-control" id="usr" >
</div>
</div>

<div class="col-lg-6">
                        <div class="form-group">
    <input type="text" name="" placeholder="LAST NAME" class="form-control" id="usr" >
</div>
</div>
<div class="col-lg-12">
                        <div class="form-group">
                        <textarea class="form-control" name="" placeholder="ADDRESSS" rows="3" id="comment"></textarea>
    
</div>
</div>

<div class="col-lg-6">
                        <div class="form-group">
    <input type="text" name="" placeholder="CITY" class="form-control" id="usr" >
</div>
</div>
<div class="col-lg-6">
                        <div class="form-group">
    <input type="text" name="" placeholder="STATE" class="form-control" id="usr" >
</div>
</div>

<div class="col-lg-6">
                        <div class="form-group">
    <input type="text" name="" placeholder="ZIP" class="form-control" id="usr" >
</div>
</div>
<div class="col-lg-6">
                        <div class="form-group">
    <input type="text" name="" placeholder="CELL PHONE NUMBER" class="form-control" id="usr" >
</div>
</div>
<div class="col-lg-6">
                        <div class="form-group">
    <input type="text" name="" placeholder="PREFERRED METHOD OF CONTACT " class="form-control" id="usr" >
</div>
</div>

<div class="col-lg-6">
                        <div class="form-group">
    <input type="text" placeholder="PREFERRED TIME OF CONTACT " class="form-control" id="usr" >
</div>
</div>

<div class="col-lg-6 usercontact">
<div class="col-lg-4 usercontact nopaddleft nopaddright">
<p>
	           <input type="text" placeholder="PREFERRED TIME OF CONTACT " class="form-control" id="usr" >
                   
	 
	        <a class="btn btn-default btn-lg usersubbtn" href="javascript:(0)">SAVE Data</a>
                </p>
                
                </div>
                <div class="col-lg-5 usercontact  nopaddleft nopaddright">
                <p>
				
                    <a class="btn btn-default btn-lg userreset" href="#">RESET</a>
                </p>
                </div>
                </div>
                
                    </div>
                    </div>
</div>
                </div>

                

            </div>

        </div>

    </div>
</div><!-- /Modal -->
	
	
	<?php
	}
	
	?>
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
 <!-- !Developed and design by rajnisonkar.com -->
	
</body>

</html>
<?php } ?>