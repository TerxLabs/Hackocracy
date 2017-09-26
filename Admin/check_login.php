<?php
    session_start();
    require 'config.php';
       if(isset($_POST['username'])){
		  $username = $_POST['username'];
		 }
		 if (isset($_POST['password'])) {
		  $password = $_POST['password'];
		 }		 
		 $q = 'SELECT * FROM users WHERE username=:username AND password=:password';
		 $query = $con->prepare($q);
		 $query->execute(array(':username' => $username, ':password' => $password));
		 if($query->rowCount() == 0){
		  header('Location: login.php?err=1');
		 }else{
		  $row = $query->fetch(PDO::FETCH_ASSOC);
		  session_regenerate_id();
		  $_SESSION['sess_user_id'] = $row['id'];
		  $_SESSION['username'] = $row['username'];
		        $_SESSION['sess_userrole'] = $row['designation'];
		        echo $_SESSION['sess_userrole'];
		  session_write_close();
		  if( $_SESSION['sess_userrole'] == "admin"){
		   header('Location: index.php');
		  }else{
		   header('Location: index-user.php');
		  }  
 	}
?>