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

    <title>Meri Raay | Edit Profile</title>

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

  <body  
  style="background: -moz-linear-gradient(right,#ffffff, #C0C5C9); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#ffffff, #C0C5C9); /* Standard syntax */
    height:950px;">

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

    <div class="container">
      <h2 style="margin-left:100px;margin-top:120px;">Edit Profile</h2>
      <?php
         $username=$_SESSION['username'];    
         $result = mysqli_query($con,"SELECT * FROM `users` WHERE username='$username' ");
         $row =mysqli_fetch_array($result);
         if(isset($_POST['edit']))
          {
              $id=$_POST['id'];
              $aadhar_id=$_POST['aadhar_id'];
              $name=$_POST['name'];
              $father_name=$_POST['father_name'];
              $gender=$_POST['gender'];
              $phone=$_POST['phone'];
              $email=$_POST['email'];
              $address=$_POST['address'];
              $city=$_POST['city'];
              $pincode=$_POST['pincode'];
              $state=$_POST['state'];
              $result= $con->query("UPDATE `users` SET `id`='$id',`aadhar_id`='$aadhar_id',`name`='$name',`father_name`='$father_name',`gender`='$gender',`phone`='$phone',`email`='$email',`address`='$address',`city`='$city',`pincode`='$pincode',`state`='$state' WHERE id='$id' ");
              echo "<meta http-equiv='refresh' content='0;url=index-user.php'>";
          }
      ?>
      <form class="form-horizontal" method="POST" action="user_profile.php" style="margin-left:100px;">
        <div class="form-group">
          <label class="control-label col-sm-2" for=" aadhar_id">Aadhaar ID:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="aadhar_id" placeholder="Enter aadhar no." name="aadhar_id" value="<?php echo $row['aadhar_id'];?>">
            <input type="hidden" name="id" value="<?php echo $row[0]; ?>" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $row['name'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="father_name">Father's Name:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="father_name" placeholder="Enter father's name" name="father_name" value="<?php echo $row['father_name'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="gender">Gender:</label>
          <div class="col-sm-10">          
            <select class="form-control" id="gender" name="gender" value="<?php echo $row['gender'];?>">
              <option value="Enter gender">Enter gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="phone">Phone:</label>
          <div class="col-sm-10">          
            <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="<?php echo $row['phone'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">          
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['email'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="address">Address:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo $row['address'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="city">City:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="<?php echo $row['city'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pincode">Pincode:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="pincode" placeholder="Enter pincode" name="pincode" value="<?php echo $row['pincode'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="state">State:</label>
          <div class="col-sm-10">          
            <select id="state" name="state" class="form-control">
              <option value="Enter your state">Enter your state</option>
              <?php
                $query=mysqli_query($con,"SELECT * FROM state");
                while($new=$query->fetch_assoc()){  
              ?>
              <option value="<?php echo $new['name'];?>"><?php echo $new['name'];?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <center><input type="submit" class="btn btn-success" name="edit" value="Edit Profile" style="margin-bottom:25px;"></center>
          </div>
        </div>
      </form>
    </div>

  </body>
</html>
