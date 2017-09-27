<?php
    require 'config.php';
    session_start();
    $role = $_SESSION['designation'];
    if(!isset($_SESSION['username'])|| $role!="admin"){
        header('Location:login.php?err=2');
    }
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];    
        $result = $con->query("SELECT * FROM `problem` WHERE id='$id' ");
        $row =mysqli_fetch_array($result);
    }
    if(isset($_POST['edit']))
    {
        $id=$_POST['id'];
        $pname=$_POST['pname'];
        $pstate=$_POST['pstate'];
        $ptag=$_POST['ptag'];
        $result= $con->query("UPDATE `problem` SET `name`='$pname',`description`='$pstate',`tag`='$ptag' WHERE id='$id' ");
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }

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
             <li style="padding: 10px;text-decoration: none; color: #ffffff;">Hi, <?php echo $_SESSION['username']; ?></li>
            <li style="padding: 10px;"><a style="text-decoration: none; color: #ffffff;" href="index.php">Home</a></li>
            <li style="padding: 10px;"><a style="text-decoration: none; color: #ffffff;" href="admin_profile.php">Profile</a></li>
            <li style="padding: 10px;"><a style="text-decoration: none; color: #ffffff;" href="add_post.php">Post Problem</a></li>
            <li style="padding: 10px;"><a style="text-decoration: none; color: #ffffff;" href="user_info.php">Users from My City</a></li>
        </ul>
    </div>
    </aside>
    <div class="right" >
        <h2 >Edit Post</h2>
         <form class="form-horizontal" method="POST" action="edit_post.php" style="margin-left:0px;">
        <div class="form-group">
          <label class="control-label col-sm-2" for="pname">Problem Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pname" placeholder="Enter problem" name="pname" value="<?php echo $row['name'];?>">
            <input type="hidden" name="id" value="<?php echo $row[0]; ?>" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pstate">Problem Description:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="pstate" placeholder="Enter description"  value="<?php echo $row['description'];?>"name="pstate">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="ptag">Problem tags:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="ptag" placeholder="Enter problem tags"  value="<?php echo $row['tag'];?>" name="ptag">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <center><input type="submit" class="btn btn-success" name="edit" value="Edit Post" style="margin-bottom:25px;"></center>
          </div>
        </div>
      </form>
                <!-- /.col -->
            </div>
        </div>
    </div>

    

</body>
</html>
