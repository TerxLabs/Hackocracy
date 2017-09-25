<?php
        session_start();
            if (isset($_POST['Login']))
            {     
                require 'config.php';
                $username=$_POST['username'];
                $password=$_POST['password'];}
                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   <meta name="author" content="Manmeet Kaur, Komal Chauhan, Jaspreet Singh Bhatti">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Meri Raay | Login</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Font Awesome CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">    
    
    <!-- Animate CSS -->
    <link href="../css/animate.css" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="../css/owl.carousel.css" >
    <link rel="stylesheet" href="../css/owl.theme.css" >
    <link rel="stylesheet" href="../css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="../css/color/blue.css">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="../css/color/blue.css" title="light-blue">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="../js/modernizr.custom.js"></script>

</head>

  <body class="login-img3-body">

       <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#131313;padding:10px;padding-left: 40px;border-bottom:5px solid #27abe3;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand page-scroll" href="#page-top"><img src="img/font.png" height="45" width="180" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="margin-top:10px;">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php" style="font-size:15px;">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php#about-us" style="font-size:15px;">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php#glimpses" style="font-size:15px;">Glimpses</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php#team" style="font-size:15px;">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php#contact" style="font-size:15px;">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
 <img src="img/logo.png" style="margin-left:150px;margin-top:120px;height:550px;width:550px;float:left;" class="vertical-line" />
 
    <div class="container" >
      <form class="login-form" action="index.html" style="margin-top:150px;">        
        <div class="login-wrap" >
            <p style="font-size:20px;color:#000000;font-style:bold;text-transform:uppercase;font-weight:50px;">SignUp<br/><br/></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Full Name" autofocus><br/>
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="number" class="form-control" placeholder="Aadhar Card No." ><br/>
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="number" class="form-control" placeholder="Phone Number" ><br/>
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Username" ><br/>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Create an Account</button><br/>
            <span class="pull-right"><a href="login.php">Already having an account, Login</a></span><br/>
        </div>
      </form>
    </div>

    <footer style="background-color:#131313;padding-left: 40px;border-top:4px solid #28abe3;padding-top:5px;margin-top:34px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright&copy;<a href="https://komalchauhan50.wixsite.com/terx">TER-X</a> 2017</span>
                    </div>
                   
                    <div class="col-md-4 col-xs-12" style="float:right;">
                        <div class="footer-link">
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    <!-- jQuery Version 2.1.1 -->
    <script src="js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/script.js"></script>

  </body>
</html>
