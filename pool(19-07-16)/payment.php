<?php session_start();
if(!isset($_SESSION['id'])){
	
	header('location:index.php');
}

else{
	
	include "config.php";
if(isset($_GET['pid'])){
	//echo $_GET['pid'];  
	$p_data=mysqli_query($con,"SELECT * FROM create_pool WHERE ` project_identifier`='".$_GET['pid']."'");
	$row_fetchp=mysqli_fetch_assoc($p_data);
	//echo "title=".$row_fetchp['title'];   

	if(isset($_POST['submit'])){

		$pool_amount=$_POST['pool_amount'];
	    $card=$_POST['card'];
		$card_number=$_POST['card_number'];
		$csc=$_POST['csc'];
		$Ex_date=$_POST['Ex_date'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$zip=$_POST['zip'];
echo "abc=". $pool_amount;	
		
	$sql=mysqli_query($con,"INSERT INTO `payment` (`pool_amount`,`project_id`,`card`,`card_number`,`csc`,`expiration_date`,`first_name`,`last_name`,`address`,`city`,`state`,`zip`)VALUES('".$pool_amount."','".$_GET['pid']."','".$card."','".$card_number."','".$csc."','".$Ex_date."','".$fname."','".$lname."','".$address."','".$city."','".$state."','".$zip."')");		
	header('location:user.php?pid1="'.$_GET['pid'].'"');
	//echo "idd=".$password;
	}
	}
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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                <img src="images/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html">HOME </a>
                    </li>
                    <li>
                        <a href="Pricing.html">FEE STRUCTURE </a>
                    </li>
                    <li>
                        <a href="Howitworks.html">HOW IT WORKS</a>
                    </li>
                    <li>
                        <a href="ContactUs.html">CONTACT US</a>
                    </li>
                    <li>
                      <a href="#modal-one" class="btn btn-info linkbtn" role="button">LOGIN / SIGNUP</a> 
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="wrap">

  
</div>
 
<!-- Modal -->
	<form action="" method="post" id="formID4" name="formID4"class="formular">
<div class="container-fluid user">
  <div class="container usercontent">

        <div class="row">

            
 
            <div class="col-md-9 userform createpool">

                <div class="row carousel-holder">
  
  
                    <div class="col-md-12">
                      <div class="col-md-12">  <h2>Payment</h2></div>
                     <div class="col-md-12  nopad">
                      <div class="col-lg-6"><label class="control-label">Title</label></div>
                      <div class="col-lg-6 result"><?php echo $row_fetchp['title'] ; ?></div>
                      <div class="clearfix"></div>

                     <div class="col-lg-6"><label class="control-label">Total Pool Amount</label></div>
                       <div class="col-lg-6 result"><?php echo $row_fetchp['pool_amount'] ; ?></div>
                       <div class="clearfix"></div>

                       <div class="col-lg-6"><label class="control-label">Pool Close Date</label></div>
                       <div class="col-lg-6 result" ><?php echo $row_fetchp['pool_close_date'] ; ?></div>
                       <div class="clearfix"></div>

                       <div class="col-lg-6"><label class="control-label">Minimum Pool Amount For Each Participant</label></div>
                       <div class="col-lg-6 "><?php echo $row_fetchp['min_pool_amount'] ; ?></div>
                       </div>
                     <div class="clearfix"></div>
                        <hr>
<div class="col-lg-6">

                        <div class="form-group">
                          <label>Your Pool Amount</label>
    <input type="text" name="pool_amount"placeholder="Your Pool Amount" class="form-control" id="usr" >
    
    
                       
</div>
</div>
<div class="col-lg-6 nopad ">
<div class="col-lg-6 ">
                        <div class="form-group">
                        <label>Select Card</label>
                       <select class="form-control" name="card" id="sel1">
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
                      
                    <input type="text" name="card_number" placeholder="Card Number" class="form-control" id="usr" >

</div>
</div>
</div>

    
<div class="clearfix"></div>

<div class="col-lg-6">
                      <div class="col-lg-4 nopad ">
                        <div class="form-group">
                        <label>CSC</label>
                      
                    <input type="text" name="csc" placeholder="CSC" class="form-control" id="usr" >
</div>
</div>

<div class="col-lg-8 ">
                        <div class="form-group">
                        <label>Expiration date</label>
                        <div class="col-lg-5 nopad" style="margin-right:10px;">
    <select class="form-control" name="Ex_date" id="sel1">
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
    <input type="text" name="fname" placeholder="First Name" class="form-control" id="usr" >
</div>
</div>

<div class="col-lg-6 ">
                        <div class="form-group">
                        <label>Last Name</label>
    <input type="text" name="lname" placeholder="Last Name" class="form-control" id="usr" >
</div>
</div>
</div>
<div class="col-lg-12">
                        
                        
                        <div class="form-group">
                        <label>Address</label>
    <textarea rows="3" name="address" class="form-control"  > Address</textarea>
   
</div>
      </div>                  
<div class="col-lg-6 nopad">
                        
       <div class="col-lg-6">                 
                        <div class="form-group">
                        <label>City</label>
    <input type="text" name="city" placeholder="City" class="form-control" id="usr" >
   </div>
</div>
         <div class="col-lg-6">                 
                        <div class="form-group">
                        <label>State</label>
    <input type="text" name="state" placeholder="State" class="form-control" id="usr" >
   </div>
</div>               

</div>

<div class="col-lg-6">
                        
                        
                        <div class="form-group">
                     <label>Zip</label>
    <input type="text" name="zip" placeholder="Zip" class="form-control" id="usr" >
                         
   
</div>
                        

</div>
<div class="col-lg-6 usercontact">
<div class="col-lg-4 usercontact nopaddleft nopaddright">
<p>
           <input type="submit" class="submit btn btn-default btn-lg usersubbtn" name="submit" id="submit" value="Save">
	    
                </p>
                
                </div>
                <div class="col-lg-5 usercontact  nopaddleft nopaddright">
                <p>	<input type="reset" value="RESET" class="btn btn-default btn-lg userreset" >
                  
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

</form>
       
    <!-- /.container -->
<footer>
<div class="container">
          <div class="row">
                <div class="col-lg-12">
                <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">
        <img alt="Brand" src="images/footer.jpg">
      </a>
    </div>
    <ul class="nav navbar-nav">
                
     <li><a href="aboutus.html"> ABOUT POOL</a>  </li>
       <li><a href="FAQ.html">   FAQ  </a>  </li>
         <li><a href="Concierge.html">   CONCIERGE </a> </li> 
          <li><a href="Privacy.html">     PRIVACY POLICY  </a></li>   
             <li><a href="Terms.html">   TERMS OF USE </a></li>   
             <li><a href="ContactUs.html">    CONTACT US</a></li>
    </ul>


                   
                </div>
                </nav>
            </div>
            </div>
            </div>
            <!-- /.row -->
            
        </footer>
        
        <div class="container-fluid socialsec">
            <div class="container">
            <div class="col-lg-12">
            <div class="col-lg-6">
            <p>© 2016 - Pool all rights reserved</p>
            </div>
            <div class="col-lg-6">
            <ul class="list-inline social">
    <li><a href="#"><img src="images/fb.png"></a></li>
    <li><a href="#"><img src="images/tw.png"></a></li>
    <li><a href="#"><img src="images/in.png"></a></li>
    <li><a href="#"><img src="images/g.png"></a></li>
  </ul>
            </div>
            </div>
            </div>
            </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

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
<?php } ?>