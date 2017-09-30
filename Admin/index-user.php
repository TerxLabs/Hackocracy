<?php
    require 'config.php';
    session_start();
    $role = $_SESSION['designation'];
    if(!isset($_SESSION['username'])|| $role!="user"){
        header('Location:login.php?err=2');
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

    <title>Meri Raay | User</title>

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
            <li style="padding: 10px;"><a style="text-decoration: none; color: #ffffff;" href="index-user.php">Home</a></li>
            <li style="padding: 10px;"><a style="text-decoration: none; color: #ffffff;" href="user_profile.php?username=<?php echo $_SESSION['username']; ?>">Profile</a></li>
            
        </ul>
    </div>
    </aside>
  <div class="right" >
         <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box" style="border-radius:25px;">
                            <h3 class="box-title">All Problems</h3>
                            <?php require "config.php";
                                $result = $con->query("SELECT * FROM `problem` ORDER BY `timestamp` DESC");
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) 
                                        {
                                            $q=$row['name'];
                                            ?>
                                       <div class="row" >     
                                       <div class="panel panel-default" >
                                          <h3 class="panel-heading" style="margin:0px;padding:10px;font-style:bold;text-transform:none;"><?php echo $row['name'];?><p style="float:right;font-size:15px;"><?php echo $row['timestamp'];?></p></h3>
                                          <div class="panel-body">
                                            <p style="background-color:#329FF2;color:#ffffff;padding:2px;font-size:17px;"><?php echo $row['tag'];?></p>
                                            <p style="font-size:20px;"><?php echo $row['description'];?></p>
                                            <p style="font-size:15px;text-align:justify ;background-color:#01A9DB;color:#ffffff;padding:2px;"> Comments:<br/>
                                                <?php
                                                    require 'config.php';
                                                    $new = $con->query("SELECT * FROM suggestions where problem='$q' ");
                                                    while($query=$new->fetch_assoc()){?>
                                                    <br/>
                                                    <b style="background-color:#01A9DB;color:#ffffff;padding:2px;"><?php echo $query['username']; ?></b>
                                                    <?php 
                                                        echo $query['suggestion'].'  '. $query['timestamp']; }?></p>
                                            <p >
                                            <form action="index-user.php" method=POST>
                                                <?php
                                                    $name=$_SESSION['username'];
                                                    $query1=$con->query("SELECT * FROM likes where username='$name' and pname='$q' ");
                                                    $query2=$con->query("SELECT * FROM dislikes where username='$name' and pname='$q' ");
                                                    if(mysqli_num_rows($query1)>0||mysqli_num_rows($query2)>0){
                                                        ?>
                                                        <button name='like' disabled class="btn btn-success">
                                                        <?php
                                                            $query3=$con->query("SELECT * FROM likes WHERE pname='$q' ");
                                                            $count=0;
                                                            if(mysqli_num_rows($query3)>0){
                                                                while($row1=$query3->fetch_assoc()){
                                                                    $count++;
                                                                }
                                                            }
                                                            echo $count;?> Likes </button>
                                                            <?php
                                                    }else{?>
                                                    <button name='like' class="btn btn-success">
                                                        <?php
                                                            $query4=$con->query("SELECT * from likes WHERE pname='$q'");
                                                            $count1=0;
                                                            if(mysqli_num_rows($query4)>0){
                                                                while($row2=$query4->fetch_assoc()){
                                                                    $count1++;
                                                                }
                                                            }
                                                            echo $count1;
                                                            ?>
                                                        Likes </button>
                                                        <?php
                                                    }
                                                    $con->close();?>
                                                    <?php
                                                    require 'config.php';
                                                    $query5=$con->query("SELECT * FROM likes where username='$name' and pname='$q' ");
                                                    $query6=$con->query("SELECT * FROM dislikes where username='$name' and pname='$q' ");
                                                    if(mysqli_num_rows($query5)>0||mysqli_num_rows($query6)>0){
                                                        ?>
                                                        <button name='dislike' class="btn btn-warning" disabled>
                                                        <?php
                                                            $query7=$con->query("SELECT * FROM dislikes where pname='$q' ");
                                                            $count2=0;
                                                            if(mysqli_num_rows($query7)>0){
                                                                while($row3=$query7->fetch_assoc()){
                                                                    $count2++;
                                                                }
                                                            }
                                                            echo $count2;?>
                                                        Dislikes </button>
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <button name='dislike' class="btn btn-warning" >
                                                        <?php
                                                            $query8=$con->query("SELECT * FROM dislikes WHERE pname='$q' ");
                                                            $count3=0;
                                                            if(mysqli_num_rows($query8)>0){
                                                                while($row4=$query8->fetch_assoc()){
                                                                    $count3++;
                                                                }
                                                            }
                                                            echo $count3;?>
                                                             Dislikes</button>
                                                             <?php
                                                    }
                                                    $con->close();
                                                ?>
                                            </form>
                                            <a href="post_suggest.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;">Leave a suggestion</a></p>
                                            
                                          </div>
                                          
                                        </div>            
                                    </div>
                            <?php
                                }
                               
                             ?>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
<?php
    require 'config.php';
     if(isset($_POST['like'])){
        $name=$_SESSION['username'];
        $sql="INSERT INTO `likes`(`liked`, `username`) VALUES('1', '$name',)";
        if ($con->query($sql) === TRUE) {
        echo '<script>alert("You Liked");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if(isset($_POST['dislike'])){
        $name=$_SESSION['username'];
        $sql="INSERT INTO `dislikes`(`liked`, `username`) VALUES('1', '$name')";
        if ($con->query($sql) === TRUE) {
        echo '<script>alert("You Disliked");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    $con->close();
?>
</body>
</html>