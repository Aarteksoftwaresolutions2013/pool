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
                <a class="navbar-brand" href="index.php">
                <img src="images/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">HOME </a>
                    </li>
                    <li>
                        <a href="pricing.php">FEE STRUCTURE </a>
                    </li>
                    <li>
                        <a href="howitworks.php">HOW IT WORKS</a>
                    </li>
                    <li>
                        <a href="contactus.php">CONTACT US</a>
                    </li>
					<?php if(!isset($_SESSION['id'])) {?>
                    <li>
                      <a href="#modal-one" class="btn btn-info linkbtn" role="button">LOGIN / SIGNUP</a> 
                    </li>
					<?php } else { ?>
					 <li>
                      <a href="logout.php" class="btn btn-info linkbtn" role="button">LOGOUT</a> 
                    </li>
					<?php } ?>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 