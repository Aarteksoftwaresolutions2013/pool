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
 <link href="css/my_css.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
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
			jQuery("#formIDc").validationEngine(
    'attach', {
        
        maxErrorsPerField: 1
    }
);
			
			 $("#submitc").on('click', function () {
            var valid = $("#formIDc").validationEngine('validate');
           

            if (valid == true) {

           return true;

            } else {
               
				$('#formIDc').validationEngine(
						'attach', {
							
							maxErrorsPerField: 1
						}
					);
            }
        });
			
			
			 
		});
		
	
		</script>
	
	
<script type='text/javascript'>
/* function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}*/
</script>
	
	<!-- captcha code -->
	<style>

.demoInputBox{padding:10px; border:#F0F0F0 0px solid; border-radius:4px;}
.error{background-color:none;border:#AA4502 0px solid;padding: 5px 5px;color:red ;border-radius:4px;}
.success{background-color: #12CC1A;border:#0FA015 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.info{font-size: 13px;color: red;font-family: arial;letter-spacing: 1px;padding-left: 5px;}
.btnAction{background-color:#2FC332;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
.btnRefresh{background-color:#8B8B8B;border:0;padding:5px 8px;color:#FFF;float:left;}
</style>
	
	<script>
function sendContact() {
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "contact_mail.php",
		data:'cemail='+$("#usrnm").val()+'&cpass='+$("#pwdnm").val()+'&cmsg='+$("#comment").val()+'&captcha='+$("#captcha").val(),
		type: "POST",
		success:function(data){
		$("#captcha-info").html(data);
		},
		error:function (){}
		});
	}
}

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	
	if(!$("#captcha").val()) {
		$("#captcha-info").html("(required)");
		//$("#captcha").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
}
function refreshCaptcha() {
	$("#captcha_code").attr('src','captcha_code.php');
}
</script>
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

<a href="#" class="modal" id="modal-two" aria-hidden="true">
  </a>
  <div class="modal-dialog">
    <div class="modal-header">
      <h2>Modal in TWO</h2>
      <a href="#" class="btn-close" aria-hidden="true">×</a>
    </div>
    <div class="modal-body">
      <p>Two modal example here! :D</p>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn">Nice!</a>
    </div>
  </div>

<!-- /Modal2 -->
    <!-- Full Page Image Background Carousel Header -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline"><span>CONTACT US</span></h1>
                </div>
            </div>
        </div>
    </header>


<div class="container">



        <div class="row">
            
            <div class="col-sm-4 Contactus">
                <h2>CONTACT</h2>
                <address>
850 Windy Hill Rd, Box 1534
 <br>Smyrna, GA 30081-1534
                   
                  
                    <br>
                </address>
                
                
                <p>
                    <a class="btn btn-default btn-lg subbtn" href="#">ROUTE</a>
                </p>
            </div>
            <div class="col-sm-8 Contactus Contactus2">
                <h2>POOL</h2>
                
                <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                
            </div>
        </div>
        <!-- /.row -->


    </div>
    <!-- Social -->
      <div class="container-fluid">
      <div class="row socialfollow">
    <div class="container">

        <div class="row follow">
           <div class="col-lg-12">
                <h2>POOL</h2>
                
            </div>
          
            <div class="col-lg-12 ">
            <div class="col-xs-6 col-sm-6 col-lg-6 noleftpad">
                                <a class="btn btn-default btn-lg subbtn" href="#">LINKEDIN</a>

</div>
<div class="col-xs-6 col-sm-6 col-lg-6 noleftpad">
<a class="btn btn-default btn-lg subbtn" href="#">FACEBOOK</a>
</div>
</div>
                
          
            
        </div>


        <div class="row follow">
           
          
            <div class="col-lg-12 ">
            <div class="col-xs-6 col-sm-6 col-lg-6  noleftpad">
<a class="btn btn-default btn-lg subbtn" href="#">TWITTER</a>
</div>
<div class="col-xs-6 col-sm-6 col-lg-6  noleftpad">
<a class="btn btn-default btn-lg subbtn" href="#">INSTAGRAM</a>
</div>
</div>
                
          
            
        </div>

    </div>
    </div>
    </div>
    <!-- Social -->
        <!-- Contact form -->
        <div class="container-fluid btmline">
      <div class="row ">
    <div class="container">

        <div class="row getcontact">
           <div class="col-lg-12">
                <h2>POOL</h2>
                
            </div>
          
            <div class="col-lg-12 ">
			 <form method="post" id="formIDc" class="formular">	
				 <div class="col-lg-12 ">
				 	<span class="errc"><?php if(isset($_GET['msg'])){ echo $_GET['msg'];} if(isset($_GET['error'])){ echo $_GET['error'];} else if(isset($_GET['capthaError'])){ echo $_GET['capthaError'];} else if(isset($_GET['checkboxError'])){ echo $_GET['checkboxError'];}	?><br></span>
					 </div>
            <div class="col-lg-6">
          <div class="form-group">
    <input type="text" placeholder="EMAIL ADDRESSS" name="cemail" class="validate[required,custom[email]] form-control" id="usrnm">
</div>
<div class="form-group">
	 
    <input type="text" placeholder="PASSWORD" name="cpass" class="validate[required] form-control" id="pwdnm">
</div>

</div>
					  

				<div class="col-lg-6">
                               <div class="form-group">
  <textarea class="validate[required] form-control" name="cmsg" placeholder="Message" rows="3" id="comment"></textarea>
</div>
</div>
					  
					   <div class="col-lg-6">
					 
 <!-- <table width="400" border="0"  align="center" cellpadding="5" cellspacing="1">
    <?php // if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" style="float: left;" valign="top"><?php //echo $msg;?></td>
    </tr>
    <?php //} ?>
    <tr>
      
      <td><img  src="captcha.php?rand=<?php //echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
      
        <input class="textfield" id="captcha_code" name="captcha_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
    </tr>
    
  </table>-->

						   
						   <div id="frmContact">
				<div id="mail-status"></div>
				<div>
				<label>Captcha</label> 
				<span id="captcha-info" class="info"></span><br/>
				<input type="text" name="captcha" style="width:100%;" id="captcha" class="demoInputBox"><br>
				</div>
				<div style="margin:14px 0px;">
				<img id="captcha_code" src="captcha_code.php" /><button name="submit" style=" margin: 0px 10px 0px 0px;" type="button" class="btnRefresh" onClick="refreshCaptcha();">Refresh Captcha</button>
				</div>
				<div>
			<!--	<button name="submit" class="btnAction" onClick="sendContact();">Send</button>-->
				</div>
				
 </div></div>

<div class="col-lg-12 getcontactbtn">
	<div class="col-lg-4" style="margin: 0 auto;float: none;">
<p>
	  <input type="button" id="submitc" name="submitc" onClick="sendContact();" class="submitc btn btn-default btn-lg subbtn" value="Submit">
                  <!--  <a class="btn btn-default btn-lg subbtn" href="#">Submit</a>-->
                </p>
                </div>
				</div>
				</form>
</div>


</div>
                
          
            
        </div>


        

    </div>
    </div>
    </div>
    <!-- / Contact form -->
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
