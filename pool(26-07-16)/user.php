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
		
	$sql = 'UPDATE personal_info SET first_name="'.$fname.'" , last_name="'.$lname.'" , address="'.$txt.'", city="'.$city.'" , state="'.$state.'", zip="'.$zip.'", phone_no="'.$number.'", method_contact="'.$select1.'", time_contact="'.$select2.'",first_time_login="1" WHERE id="'.$_SESSION['id'].'" ';
	$retval = mysqli_query($con,$sql);

	//header('location:user.php?msg=Data Saved successfully');

		
}

		$ppp=mysqli_query($con,"SELECT * FROM personal_info WHERE id='".$_SESSION['id']."' ");
		$project=mysqli_query($con,"SELECT * FROM create_pool WHERE login_id='".$_SESSION['id']."' ORDER BY id DESC;");

//mysqli_close($con);
	
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
	
<style type="text/css">

.paging-nav {
  text-align: right;
  padding-top: 15px;
	 padding-bottom: 15px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav,
#tableData {
  width: 100%;
  margin: 20px auto;
	border:none;
  font-family: Arial, sans-serif;
}
.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th{
  border: 1px solid #fff;
}	
	
</style>
<script>
	$(document).ready(function(){
	$('.list-group > a').on('click',function(){
		//alert("jjjj");
		$('.list-group > a').removeClass('active');
	$(this).addClass("active");
	
	});
		
	//$("#tr").attr("disabled", "disabled");	
	$('#tr').addClass('disabled');
		//$('#TRANSACTIONS').addClass('disabled');
		
			});
	
</script>	
<?php  if(isset($_GET['pid1'])){ ?>
	
	<script>
		$(document).ready(function(){				
		$("#prj").click();
		  });
	</script>
		
	<?php
	 }	?>
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
     <?php if(isset($_GET['id'])) { 
			?>
			<script>$(document).ready( function() {  $('#prj').click(); }); </script>
			
		 <?php	} ?>
			
			 <?php if(isset($_GET['vid'])) { 
		         $vid=$_GET['vid'];
				

				 if($vid==2){  ?>

				  <script>$(document).ready( function() {
	             $('#tr').removeClass('disabled');
	          $("#tr").attr("href", "#TRANSACTIONS");
	       $('#tr').click(); 
                  }); </script>
				<?php }

				  if($vid==3){
				?>
				<script>$(document).ready( function() {  $('#prj').click(); }); </script>
			 <?php	} 

	    	  if($vid==4){
				?>
				<script>$(document).ready( function() {  $('#ba').click(); }); </script>

			 <?php	} 
	
	
			 }  ?>
			
			<div class="col-md-3">
                <div class="list-group">
                    <a id="pi" href="#PERSONALINFORMATION" data-toggle="tab" class="list-group-item active">PERSONAL INFORMATION </a>
                    <a id="tr" href="javascript:void(0)" data-toggle="tab" class="list-group-item">TRANSACTIONS</a>
                    <a id="prj" href="#PROJECTS" data-toggle="tab" class="list-group-item">PROJECTS</a>
                    <a id="ba" href="#" data-toggle="tab" class="list-group-item">BANK ACCOUNTS</a>
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
                    
                    
	  
                    <div id="PROJECTS" class="tab-pane fade">
                    <div class="col-md-12">
						<table id="tableData" class="table table-bordered table-striped">
          <thead style="background-color: #03B3ED;color: #fff;">
    <tr>
              <th>Project ID</th>
              <th>POOL Title</th>
              <th>Open/Close</th>
              <th>Desired POOL Amount</th>
		      <th>Actual Amount Received</th>
		      <th>Additional Services</th>
            </tr>
  </thead>
          <tbody>	<?php while($row_fetchpro=mysqli_fetch_assoc($project))
		   { 
			 ?>
		
    <tr>
              <td><?php $current_date=date("Y-m-d"); $close_date=$row_fetchpro['pool_close_date']; if($current_date<$close_date){ ?><a href="payment.php?pid=<?php echo $row_fetchpro[' project_identifier']; ?>">
				  <?php echo $row_fetchpro[' project_identifier']; ?></a><?php }else{ ?> <a><?php echo $row_fetchpro[' project_identifier']; ?></a><?php } ?></td>
		
              <td><?php echo $row_fetchpro['title']; ?></td>
              <td><?php $current_date=date("Y-m-d"); $close_date=$row_fetchpro['pool_close_date']; if($current_date<$close_date){  echo "Open"; }else{ echo "Close"; } ?></td>
              <td><?php echo $row_fetchpro['pool_amount'];  ?></td>
		      <td><?php  //if(isset($_GET['pid1'])){
		  // $payment=mysqli_query($con,"SELECT SUM(`pool_amount`) FROM payment WHERE project_id='".$_GET['pid1']."'");
		 $payment=mysqli_query($con,"SELECT * FROM payment WHERE project_id='".$row_fetchpro[' project_identifier']."'");
			//$row_fetch1=mysqli_fetch_assoc($payment);
				 $count=mysqli_num_rows($payment); 
			//$amount=$row_fetch1['pool_amount'];
				// print( $amount);
			$arr=array();
			while($row_fetch1=mysqli_fetch_assoc($payment)){
				$amount=$row_fetch1['pool_amount'];
				//$sum=intval($amount);
				array_push($arr,$amount);
				
				//echo var_dump($sum);
				//$sums=array_sum($amount);
				// echo var_dump($sums);
				
			 }$sums=array_sum($arr); print($sums);
			// else { echo "$0" ;}	
				/* foreach($row_fetch1 as $amount){
				 echo "$".$amount;
				 }*/
		//while($row_fetch1=mysqli_fetch_assoc($payment)){
			//$amount=$row_fetch1['pool_amount'];
			// echo "+";
		// echo $amount; }
	//} //else { echo "$0" ;}	 ?></td>
		      <td><?php echo $row_fetchpro['option_services']; ?></td>
            </tr>
			  <?php } ?>
            
  </tbody>
        </table>
						
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
						<script type="text/javascript" src="js/paging.js"></script> 
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:10});
            });
        </script>
        <script type="text/javascript">

  /*var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
*/
</script>
						
                      </div>
	              </div>
	  
	  
	  
	  
                    <div id="TRANSACTIONS" class="tab-pane fade">
                   
        <div class="row">

            

            <div class="col-md-12 userform createpool">

                <div class="row carousel-holder">
  
  
                    <div class="col-md-12">
                      <div class="col-md-12">  <h2>Payment</h2></div>
                     <div class="col-md-12  nopad">
                      <div class="col-lg-6"><label class="control-label">Title</label></div>
                      <div class="col-lg-6 result">Pool Title</div>
                      <div class="clearfix"></div>

                     <div class="col-lg-6"><label class="control-label">Total Pool Amount</label></div>
                       <div class="col-lg-6 result">Total Pool Amount</div>
                       <div class="clearfix"></div>

                       <div class="col-lg-6"><label class="control-label">Pool Close Date</label></div>
                       <div class="col-lg-6 result" >Pool Close Date</div>
                       <div class="clearfix"></div>

                       <div class="col-lg-6"><label class="control-label">Minimum Pool Amount For Each Participant</label></div>
                       <div class="col-lg-6 ">Pool Close Date</div>
                       </div>
                     <div class="clearfix"></div>
                        <hr>
<div class="col-lg-6">

                        <div class="form-group">
                          <label>Your Pool Amount</label>
    <input type="text" placeholder="Your Pool Amount" class="form-control" id="usr" >
    
    
                       
</div>
</div>
<div class="col-lg-6 nopad ">
<div class="col-lg-6 ">
                        <div class="form-group">
                        <label>Select Card</label>
                       <select class="form-control" id="sel1">
    <option selected="">Select Card </option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
                      
</div>
</div>

<div class="col-lg-6 ">
                        <div class="form-group">
                       
                        <label>Card Number</label>
                      
                    <input type="text" placeholder="Card Number" class="form-control" id="usr" >

</div>
</div>
</div>

    
<div class="clearfix"></div>

<div class="col-lg-6">
                      <div class="col-lg-4 nopad ">
                        <div class="form-group">
                        <label>CSC</label>
                      
                    <input type="text" placeholder="CSC" class="form-control" id="usr" >
</div>
</div>

<div class="col-lg-8 ">
                        <div class="form-group">
                        <label>Expiration date</label>
                        <div class="col-lg-5 nopad" style="margin-right:10px;">
    <select class="form-control" id="sel1">
    <option selected="">01</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
    </div>
     <div class="col-lg-6 nopad">
     <select class="form-control" id="sel1">
    <option selected="">2016</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
     </div>
</div>
</div>



</div>
<div class="col-lg-6 nopad ">
<div class="col-lg-6 ">
                        <div class="form-group">
                        <label>First Name</label>
    <input type="text" placeholder="First Name" class="form-control" id="usr" >
</div>
</div>

<div class="col-lg-6 ">
                        <div class="form-group">
                        <label>Last Name</label>
    <input type="text" placeholder="Last Name" class="form-control" id="usr" >
</div>
</div>
</div>
<div class="col-lg-12">
                        
                        
                        <div class="form-group">
                        <label>Address</label>
    <textarea rows="3" class="form-control"  > Address</textarea>
   
</div>
      </div>                  
<div class="col-lg-6 nopad">
                        
       <div class="col-lg-6">                 
                        <div class="form-group">
                        <label>City</label>
    <input type="text" placeholder="Minimum Pool Amount" class="form-control" id="usr" >
   </div>
</div>
         <div class="col-lg-6">                 
                        <div class="form-group">
                        <label>State</label>
    <input type="text" placeholder="Minimum Pool Amount" class="form-control" id="usr" >
   </div>
</div>               

</div>

<div class="col-lg-6">
                        
                        
                        <div class="form-group">
                     <label>Zip</label>
    <input type="text" placeholder="Zip" class="form-control" id="usr" >
                         
   
</div>
                        

</div>
<div class="col-lg-6 usercontact">
<div class="col-lg-4 usercontact nopaddleft nopaddright">
<p>
                    <a class="btn btn-default btn-lg usersubbtn" href="#">SUBMIT</a>
                </p>
                
                </div>
                <div class="col-lg-5 usercontact  nopaddleft nopaddright">
                <p>
                    <a class="btn btn-default btn-lg userreset" href="#">CLEAR</a>
                </p>
                </div>
                </div>
</div>


</div>

</div>
                </div>

                

            </div>

        </div>

   <!-- /Modal -->

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