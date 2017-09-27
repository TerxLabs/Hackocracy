<?php
    session_start();
    require 'config.php';
       if(isset($_POST['login']))
       {
       		$username=$_POST['username'];
       		$password=$_POST['password'];
            $result = $con->query("SELECT username,password,designation FROM `users`");
            while($row=mysqli_fetch_array($result)){
            	$db_username=$row['username'];
            	$db_password=$row['password'];
            	$db_designation=$row['designation'];

            	if($username==$db_username && $password==$db_password){
            		session_start();
            		$_SESSION['username']=$db_username;
            		$_SESSION['designation']=$db_designation;	

            		if($_SESSION['designation']=='admin'){
            			header("Location:index.php");
            		}
            		else if($_SESSION['designation']=='user'){
            			header("Location:index-user.php");
            		}else{
            			header("Location:login.php");
            		}
            	}
            }
       }
?>