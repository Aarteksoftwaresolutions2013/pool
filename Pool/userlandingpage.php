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
  <script src="js/jquery.js"></script>
    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/tabs.css" />
		<link rel="stylesheet" type="text/css" href="css/tabstyles.css" />
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

<div class="container-fluid userland">

<section>
				<div class="tabs tabs-style-topline">
					<nav>
						<ul>
							<span id="vvv"></span>
							<li><a href="user.php" class="icon icon-home glyphicons glyphicons-user"><span> Personal Info</span></a></li>
							<li><a href="user.php?vid=2" class="icon icon-gift"><span>Transactions</span></a></li>
							<li><a href="#section-topline-3" class="icon icon-upload"><span>Upload</span></a></li>
							<li><a href="user.php?vid=3" class="icon icon-coffee"><span> Projects</span></a></li>
							<li><a href="user.php?vid=4" class="icon icon-config"><span> Bank Account</span></a></li>
                            <li><a href="create_pool.php" class="icon icon-config"><span> Create Pool</span></a></li>
						</ul>
					</nav>
					<div class="content-wrap">
						<section id="section-topline-1"><p>1</p></section>
						<section id="section-topline-2"><p>2</p></section>
						<section id="section-topline-3"><p>3</p></section>
						<section id="section-topline-4"><p>4</p></section>
						<section id="section-topline-5"><p>5</p></section>
                        						<section id="section-topline-6"><p>6</p></section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
			
			
			
			
			
  
</div><!-- /Modal -->


       
    <!-- /.container -->
  <?php include "footer.php"; ?>
    <!-- jQuery -->
  


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  		<script src="js/modernizr.custom.js"></script>
        <script src="js/cbpFWTabs.js"></script>
		<script>
			
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
					
				});

			})();
			
				/*$(".tabs > nav > ul > li").on('click',function(){
			var vv=$(".content-wrap > .content-current > p").text();
				$('#vvv').html(vv);	
					//alert(vv);
			});*/
			
		</script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<!-- !Developed and design by rajnisonkar.com -->
</body>

</html>
