<?php 
//include "main.php";
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

	<script src="js/jquery-1.8.2.min.js" type="text/javascript">

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
<script>
		function validate() {
			
		}
		function formSuccess() {
			alert('Success!');
		}
		
		function formFailure() {
			alert('Failure!');
		}
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine({
				onFormSuccess:formSuccess,
				onFormFailure:formFailure
			});
		});

		/**
		*
		* @param {jqObject} the field where the validation applies
		* @param {Array[String]} validation rules for this field
		* @param {int} rule index
		* @param {Map} form options
		* @return an error string if validation failed
		*/
		function checkHELLO(field, rules, i, options){
			if (field.val() != "HELLO") {
				// this allows to use i18 for the error msgs
				return options.allrules.validate2fields.alertText;
			}
		}
	</script>
  	<form id="formID" onsubmit="return jQuery(this).validationEngine('validate');" class="formular" method="post">
		<fieldset>
			<legend>
				Required!
			</legend>
			<label>
				<span>Field is required : </span>
				<input value="" class="validate[required] text-input" type="text" name="req" id="req" />
			</label>
		</fieldset>
		<input class="submit" type="button" onclick="jQuery('#formID').submit();" value="Validate &amp; Send the form!"/><hr/>
	</form>	
</div>
 
<!-- Modal -->
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
			<span class="err"><?php if(isset($_GET['$message'])){ echo $_GET['$message'];} if(isset($_GET['loginerr'])){ echo $_GET['loginerr'];} ?><br></span><br>
            <div class="form-group">
    <input type="text" placeholder="EMAIL ADDRESSS" name="email" class="validate[required],custom[email] form-control" id="usr" >
    <span class="email"></span>
</div>
<div class="form-group">
    <input type="password" placeholder="PASSWORD" name="password" class="form-control" id="pwd">
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
    <input type="text" placeholder="EMAIL ADDRESSS" name="s_email" class="validate[required],custom[email] form-control" id="usr" >
        <span class="email"></span>
    
</div>
<div class="form-group">
    <input type="password" placeholder="PASSWORD" name="s_password" class="validate[required] form-control" id="pwd">
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
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill slide1" ></div>
                <div class="carousel-caption">
                    <h2><span class="bluetxt">FEEL </span>THE <span class="blacktxt">ADRENALIN</span></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill slide2"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill slide3"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
      <div class="container-fluid">
      <div class="row contact">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1> <a href="ContactUs.html" class="btn btn-info contactbtn" role="button">CONTACT US</a> 
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
    <!-- Footer -->
        
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
         <li><a href="#">   CONCIERGE </a> </li> 
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
