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


<div class="container-fluid user">
  <div class="container usercontent">

        <div class="row">

            

            <div class="col-md-9 userform createpool">

                <div class="row carousel-holder">
  
  
                    <div class="col-md-12">
                      <div class="col-md-12">  <h2>Payment</h2></div>
                        
<div class="col-lg-6">

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

    </div>
</div><!-- /Modal -->


       
    <!-- /.container -->
  <?php include "footer.php"; ?>
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
