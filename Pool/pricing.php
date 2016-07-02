<?php session_start();
      include "main.php";
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
    
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>

</head>

<body>

   <?php include "header.php"; ?>

<div class="wrap">

  
</div>
 
<a href="#" class="modal" id="modal-one" aria-hidden="true">
  </a>
  <div class="modal-dialog">
    <div class="modal-header">
      
      <a href="#" class="btn-close" aria-hidden="true">×</a>
    </div>
    <div class="modal-body">
    
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#red" data-toggle="tab">LOGIN </a></li>
            <li><label>/</label></li>
            <li><a href="#orange" data-toggle="tab">SIGNUP</a></li>
          
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
		 <form action="" method="post" id="formID1" class="formular">	
			<span class="err"><?php if(isset($_GET['$message'])){ echo $_GET['$message'];} if(isset($_GET['loginerr'])){ echo $_GET['loginerr'];}if(isset($_GET['herr1'])){ echo $_GET['herr1'];} ?><br></span><br>
            <div class="form-group">
    <input type="text" placeholder="EMAIL ADDRESSS" name="email" class="validate[required,custom[email]] form-control" id="usr1" >
    <span class="email"></span>
</div>
<div class="form-group">
    <input type="password" placeholder="PASSWORD" name="password" class="validate[required] form-control" id="pwd1">
     <span class="pass"></span>
</div>


<div class="form-group">
    <input type="submit" id="submit1" name="login" class="submit1 btn btn-info" value="LOGIN">
</div>
                 <div class="modal-footer">
      <a href="#modal-two">RESET YOUR PASSWORD</a>
    </div>
        </form>    </div>
            
            
            <div class="tab-pane" id="orange">
            <form action="" method="post" id="formID2" class="formular">
					<span class="err" id="a_err"><?php if(isset($_GET['$message'])){ echo $_GET['$message'];} ?><br></span><br>
                        <div class="form-group">
    <input type="text" placeholder="EMAIL ADDRESSS" name="s_email" class="validate[required,custom[email]] form-control" id="usr2" >
        <span class="email"></span>
    
</div>
<div class="form-group">
    <input type="password" placeholder="PASSWORD" name="s_password" class="validate[required] form-control" id="spwd">
         <span class="pass"></span>
</div>
<div class="form-group">
    <input type="password" placeholder="CONFIRM PASSWORD" name="confirm_password" class="form-control validate[required,equals[spwd]]" id="cpwd">
         <span class="rght"></span>
</div>

<div class="form-group">
    <input type="submit" id="submit2" name="s_submit" class="submit2 btn btn-info" value="CREATE YOUR ACCOUNT">
</div>
                 <div class="modal-footer">
                 BY CREATING AN ACCOUNT YOU ACKNOWLEDGE THAT YOU 
      <a href="#">ACCEPT THE TERMS & CONDITIONS</a>
    </div>
                
   </form>   
			</div>
            
            
            
        </div>
    </div>

    </div>
    
  </div>

<!-- /Modal -->
<!-- Modal2 -->
<a href="#" class="modal" id="modal-two" aria-hidden="true">
  </a>
  <div class="modal-dialog">
    <div class="modal-header">
      
      <a href="#" class="btn-close" aria-hidden="true">×</a>
    </div>
    <div class="modal-body">
    <h2>Forgot your password?</h2>
     <div id="my-tab-content" class="tab-content">
       <div class="form-group">
    <input type="text" placeholder="EMAIL ADDRESSS" class="form-control" id="usr" >
        <span class="email"></span>
        </div>
    
</div>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn">RESET YOUR PASSWORD</a>
    </div>
  </div>

<!-- /Modal2 -->
    <!-- Full Page Image Background Carousel Header -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline"><span>PRICING</span></h1>
                </div>
            </div>
        </div>
    </header>


<div class="container">



        <div class="row">
            
            
            <div class="col-sm-10 price">
                <h2>Pricing</h2>
                <div class="col-md-6 col-sm-6 col-lg-6 pricing brd">
                <span class="icon-pdf-document"></span>
                <h4>YOU PRINT THE GENERATED PDF</h4>
                <div class="cb-price">
          <span class="cb-price-tag">$</span>
          <span class="cb-price-number">0.25</span>
          <span class="cb-price-label">/ pool</span>
        </div>
        
        <ul class="bullets">
          <li>Compatible with all <a href="/name-badges">Avery name badge kits</a></li>
          <li>Optionally customize to fit any paper format</li>
        </ul>
                </div>
                
                <div class="col-md-6 col-sm-6 col-lg-6 pricing">
               <span class="icon-package"></span>
                 <h4>YOU PRINT THE GENERATED PDF</h4>
                
                <div class="cb-price">
          <span class="cb-price-tag">$</span>
          <span class="cb-price-number">0.25</span>
          <span class="cb-price-label">/ pool</span>
        </div>
              <ul class="bullets">
          <li>Compatible with all <a href="/name-badges">Avery name badge kits</a></li>
          <li>Optionally customize to fit any paper format</li>
        </ul>  
                </div>
               
                
            </div>
            <div class="col-lg-10 text-center start">
                <div class="col-sm-4" style="margin:0 auto; float:none;">
					<a href="create_pool.php#modal-one" class="str_now btn btn-info">START NOW</a>
<!--<input type="submit" class="btn btn-info" value="START NOW">-->
</div>
</div>
            
        </div>
        <!-- /.row -->


    </div>
    
  <div class="container-fluid">
      <div class="row contact">
    <div class="container">

        <div class="row">
            
            <div class="col-lg-10 Pool">
            
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<a href="FAQ.php" class="btn btn-info pricebtn">See Our FAQ</a>

</div>
   
  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-lg-3">
  <a href="aboutus.php" class="btn btn-info pricebtn">About Us</a>


</div>

<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-lg-3">
<a href="contactus.php" class="btn btn-info pricebtn">Contact Us</a>


</div>

<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-lg-3">
<a href="howitworks.php" class="btn btn-info pricebtn">How it Works</a>


</div> 
                
            </div>
        </div>


        

    </div>
    </div>
    </div>     
   
   <div class="container-fluid">
      <div class="row priceimage">
    <div class="container">

        <div class="row">
            
            <div class="col-lg-10 Pool">
            <div class="col-lg-12">
                <h1>Do Yourself A Favor, Save Time<br> And Money Now </h1>
                
            </div>
<div class="col-lg-12">
<a href="create_pool.php#modal-one" class="btn btn-info createpool">CREATE POOL</a>

</div>
   
  



 
                
            </div>
        </div>


        

    </div>
    </div>
    </div>
  <?php include "footer.php"; ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

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
