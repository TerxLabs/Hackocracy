<?php
    require 'config.php';
    if (isset($_POST['signup_button']))
        {       
            session_start();
            $name=$_POST['name'];
            $aadhar=$_POST['aadhar'];
            $phonenumber=$_POST['phonenumber'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $password2=$_POST['password2'];
            
                $query=mysqli_query($con,"SELECT username FROM 'users' WHERE username='".$_POST['username']."' ");
                $count=mysqli_num_rows($query);
                echo $count;
                if($count!=0){
                    die('The entered username already exists !');
                    echo "<script>alert('The entered username already exists !')</script>";
                }else{
                if($password==$password2){
                    //create user
                    $password=$password;   //hash password before storing it for security purposes
                    $query=mysqli_query($con,"INSERT INTO `users`(`aadhar_id`, `designation`, `username`, `name`, `father_name`, `password`, `gender`, `phone`, `email`, `address`, `city`, `pincode`, `state`) VALUES ('$aadhar','user','$username','$name','','$password','','$phonenumber','','','','','')");
                    $_SESSION['username']=$username;
                    header("location:login.php");  //redirect to user home
                }else{
                    //failed
                    $_SESSION['message']="The two passwords entered do not match.Please try again.";
                }
             }        
        }    
?>