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
    <header class="about-header ">
        <div class="container-fluid">
            <div class="row">
               
                <iframe width="100%" height="345"
src="http://www.youtube.com/embed/XGSy3_Czz8k" style="border:none;">
</iframe>
                    <!--<h1 class="tagline"><span>ABOUT US</span></h1>-->
               
            </div>
        </div>
    </header>


<div class="container">



        <div class="row aboutpadding">
            
            <div class="col-sm-8 aboutus">
                <h2 class="text-left">ABOUT POOL</h2>
                
                
                
                <p class="text-left">
                   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, 
                </p>
                
                <p class="text-left">
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                
              
            </div>
            <div class="col-sm-8 aboutus">
                <h2 class="text-left">  our team </h2>
                
                <p class="text-left">
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                
              
            </div>
            
           </div> 
            </div>
            
            

<div class="col-sm-12 aboutus teamImg">
            
            <div class="row">
  
  
</div>


            </div>
         
            
    <div class="container">        
              <div class="row aboutpadding">
      
            <div class="col-sm-8 aboutus">
                <h2 class="text-left">Culture</h2>
                
                <p class="text-left">
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                
              
            </div>
            
            <div class="col-sm-10 aboutus">
            
            <div class="row">
  <div class="col-sm-6 col-md-6">
  <div class="thumbnail">
    <img src="images/culture2.jpg" alt="alexk">
    </div>
  </div>
  
  <div class="col-sm-6 col-md-6">
   <div class="thumbnail">
      <img src="images/culture1.jpg" alt="alexk">
          </div>
      </div>
    </div>
    
  </div>
  <div class="col-sm-8 aboutus">
                <h2 class="text-left">Community</h2>
                
                <p class="text-left">
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                
              
            </div>
            
            <div class="col-sm-10 aboutus">
            
            <div class="row">
  <div class="col-sm-6 col-md-6">
  <div class="thumbnail">
    <img src="images/P21729071.jpg" alt="alexk">
    </div>
  </div>
  
  <div class=" col-sm-6 col-md-6">
   <div class="thumbnail">
      <img src="images/culture1.jpg" alt="alexk">
          </div>
      </div>
    </div>
    
    <div class="row">
  <div class="col-xs-6 col-sm-6 col-md-4 port-1 effect-1">
  <div class="thumbnail image-box">
    <img src="images/port1.jpg" alt="alexk">
    </div>
    <div class="text-desc">
                    	<h3>Your Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
                    	
          </div>
  </div>
  
  <div class="col-xs-6 col-sm-6 col-md-4 port-1 effect-1">
  <div class="thumbnail image-box">
    <img src="images/port5.jpg" alt="alexk">
    </div>
    <div class="text-desc">
                    	<h3>Your Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
                    	
          </div>
  </div>
      
      <div class="col-xs-6 col-sm-6 col-md-4 port-1 effect-1">
  <div class="thumbnail image-box">
    <img src="images/port6.jpg" alt="alexk">
    </div>
    <div class="text-desc">
                    	<h3>Your Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
                    	
          </div>
  </div>
    </div>
  </div>
  </div>
    </div>
</div>


            </div>
        </div>
        <!-- /.row -->


    </div>
    
       <div class="container-fluid">
      <div class="row contact">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1> <a href="contactus.php" class="btn btn-info contactbtn" role="button">CONTACT US</a> 
     </h1>
                
            </div>
            <div class="col-lg-6 Pool">
            <div class="col-lg-8">
                <div class="form-group">
    <input type="text" placeholder="ENTER POOL ID" class="form-control" id="usr">
</div></div>
<div class="col-lg-4">
<input type="submit" class="btn btn-info" value="FILL UP A POOL">
</div>
                
            </div>
        </div>


        

    </div>
    </div>
    </div>
        
    </div>
    <!-- / Contact form -->
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
