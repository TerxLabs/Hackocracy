<!--
    require 'config.php';
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['username'])|| $role!="user"){
        header('Location:login.php?err=2');
    }
-->
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

     <link href="css/styles.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
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
                      <li>
                        <a class="page-scroll" href="logout.php" style="font-size:15px;">Logout </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<aside> 
    <div class="left" > 
        <ul style="text-align: center; padding-left: 0px;font-size: 18px;font-family: sans-serif;margin-top:30px;" class="list">
            <li style="padding: 10px;"><a style="text-decoration: none; color: #ffffff;" href="index.php">Home</a></li>
            <li style="padding: 10px;"><a style="text-decoration: none; color: #ffffff;" href="user_profile.php">Profile</a></li>
            <li style="padding: 10px;"><a style="text-decoration: none; color: #ffffff;" href="add_post.php">Post a New Problem</a></li>
        </ul>
    </div>
    </aside>
    <div class="right" >
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 20px;"><p>What Is Bootstrap?</p></div>
                        <div class="panel-body" style="font-size: 15px;">
                            Bootstrap is front end frameworkto build custom web applications that are fast, responsive &amp; intuitive. It consist of CSS and HTML for typography, forms, buttons, tables, grids, and navigation along with custom-built jQuery plug-ins and support for responsive layouts. With dozens of reusable components for navigation, pagination, labels, alerts etc..                          
                        </div>
                        <div class="panel-heading" align="right">
                            <button type="button" class="btn btn-success btn-md">Approval</button>
                            <button type="button" class="btn btn-danger btn-md">Rejected</button>
                            <button type="button" class="btn btn-warning btn-md">Suggestion</button>
                    </div>
                </div>
                 <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 20px;"><p>What Is Bootstrap?</p></div>
                        <div class="panel-body" style="font-size: 15px;">
                            Bootstrap is front end frameworkto build custom web applications that are fast, responsive &amp; intuitive. It consist of CSS and HTML for typography, forms, buttons, tables, grids, and navigation along with custom-built jQuery plug-ins and support for responsive layouts. With dozens of reusable components for navigation, pagination, labels, alerts etc..                          
                        </div>
                        <div class="panel-heading" align="right">
                            <button type="button" class="btn btn-success btn-md">Approval</button>
                            <button type="button" class="btn btn-danger btn-md">Rejected</button>
                            <button type="button" class="btn btn-warning btn-md">Suggestion</button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 20px;"><p>What Is Bootstrap?</p></div>
                        <div class="panel-body" style="font-size: 15px;">
                            Bootstrap is front end frameworkto build custom web applications that are fast, responsive &amp; intuitive. It consist of CSS and HTML for typography, forms, buttons, tables, grids, and navigation along with custom-built jQuery plug-ins and support for responsive layouts. With dozens of reusable components for navigation, pagination, labels, alerts etc..                          
                        </div>
                        <div class="panel-heading" align="right">
                            <button type="button" class="btn btn-success btn-md">Approval</button>
                            <button type="button" class="btn btn-danger btn-md">Rejected</button>
                            <button type="button" class="btn btn-warning btn-md">Suggestion</button>
                    </div>
                </div>

                <div class="row" >
                    <div class="col-sm-12" >
                    <a href="#" style="color: #555555; text-decoration: none;" >Twitter</a> <small class="text-muted" style="color: #555555; text-decoration: none;">|</small> <a href="#" style="color: #555555; text-decoration: none;">Facebook</a> <small class="text-muted" style="color: #555555;">|</small> <a href="#" style="color: #555555; text-decoration: none;">Google+</a>

                    <a href="http://www.terx.tech/" target="_blank"  style="color: #555555; text-decoration: none; float: right;margin-bottom: 20px;">Terx ©Copyright 2017</a>
                    </div>
                </div>
                <div class="row" id="footer">
                    <div class="col-sm-12">
                        </
                    </div>
                        </div>

            </div>  
        </div>
    </div>

    

</body>
</html>
