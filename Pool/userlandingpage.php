<?php session_start(); ?>
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
 
<!-- Modal -->
<div class="container-fluid userland">

<section>
				<div class="tabs tabs-style-topline">
					<nav>
						<ul>
                        
							<li><a href="#section-topline-1" class="icon icon-home glyphicons glyphicons-user"><span> Personal Info</span></a></li>
							<li><a href="#section-topline-2" class="icon icon-gift"><span>Transactions</span></a></li>
							<li><a href="#section-topline-3" class="icon icon-upload"><span>Upload</span></a></li>
							<li><a href="#section-topline-4" class="icon icon-coffee"><span> Projects</span></a></li>
							<li><a href="#section-topline-5" class="icon icon-config"><span> Bank Account</span></a></li>
                            <li><a href="#section-topline-6" class="icon icon-config"><span> Create Pool</span></a></li>
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
    <script src="js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

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
