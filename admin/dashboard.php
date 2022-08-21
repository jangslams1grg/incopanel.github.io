<?php require_once './includes/session.php'; ?>
<?php require_once './includes/dbconfig.php'; ?>
<?php require_once './includes/functions.php'; ?>
<?php confirm_logged_in(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inco panel industries Pvt Ltd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<style>
      blink {
        animation: blinker 0.6s linear infinite;
        color: #1c87c9;
       }
      @keyframes blinker {  
        50% { opacity: 0; }
       }
       .blink-one {
         animation: blinker-one 1s linear infinite;
       }
       @keyframes blinker-one {  
         0% { opacity: 0; }
       }
       
       @keyframes blinker-two {  
         100% { opacity: 0; }
       }
    </style>
</head>
<?php
include("php/header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h1 class="page-subhead-line"><span class="blink-one">Welcome to <i>Inco panel industries Pvt Ltd</i>.</span><b><?php echo "Logged in as : " . $_SESSION['Admin_username']; ?></b>
						</h1>

                    </div>
                </div>
                          <!-- /. ROW  -->
                <div class="row">
				
				  <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="service.php">
                                <i class="fa fa-users fa-5x"></i>
                                <h5>SERVICES</h5>
                            </a>
                        </div>
                    </div>
				
				
                   
					
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="manufacture.php">
                                
								<i class="fa fa-file-text fa-5x"></i>
                                <h5>MANUFACTURING PROCESS</h5>
                            </a>
                        </div>
                    </div>
					
					
					 <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="products.php">
                                <!--<i class="fa fa-file-text fa-5x"></i>-->
								<i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i>
                                <h5>PRODUCTS</h5>
                            </a>
                        </div>
                    </div>
                  
				  <div class="row">
				
				  <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="testimonial.php">
                                <!--<i class="fa fa-users fa-5x"></i>-->
								<i class="fa fa-comments-o fa-5x" aria-hidden="true"></i>

                                <h5>TESTIMONIALS</h5>
                            </a>
                        </div>
                    </div>
				
				
				 <div class="col-md-4">
                        <div class="main-box mb-dull">
						
                            <a href="setting.php">    
								<i class="material-icons fa-5x">&#xe8b8;</i>
                                <h5>SETTING</h5>
                            </a>
                        </div>
                    </div>
				
                   
					
					<div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="contact.php">
                                <!--<i class="fa fa-file-text fa-5x"></i>-->
								<i class="material-icons" style="font-size:48px;color:red"></i>
								<i class="material-icons fa-5x">&#xe551;</i>
                                <h5>CONTACT</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->

            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec" align="center">
       <b>Inco panel industries Pvt Ltd | Developed By : <a href="#" target="_blank">Jamyang Lama</b></a>
    </div>
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>

    
</body>
</html>
