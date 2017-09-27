<?php
require "config.php";
session_start();// Starting Session
// Storing Session
$login_session=$_SESSION['login_user'];
if(!isset($login_session)){
header('Location: login.php'); // Redirecting To Home Page
} 	

$pname=$_POST['pname'];
$pstate=$_POST['pstate'];
$ptag=$_POST['ptag'];


if($pname===''||$pstate===''){
 echo "Fill Fields";
}else{
	$sql = "INSERT INTO `problem`(`name`, `description`, `tag`, `count_like`, `count_dislike`)  VALUES ('$pname','$pstate','$ptag','0', '0') ";

	if ($con->query($sql) === TRUE) {
		echo "<script> alert('Successfully Posted'); </script> <br>";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}
}
$con->close();
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Meri Raay | Add Post</title>
    <style>
    	body{
    		background:url(img/post.jpg);
    		background-size:cover;
    		background-repeat:no-repeat;
    	}
	</style>
</head>
<body>
	<button type="button" class="btn btn-default active"><a href="add_post.php" style="text-decoration:none;">Go Back</a></button>
</body>
</html>