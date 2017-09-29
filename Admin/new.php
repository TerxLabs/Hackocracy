<?php
	require 'config.php';
	session_start();
	if(isset($_POST['like'])){
		$name=$_SESSION['username'];
		$sql="INSERT INTO `likes`(`liked`, `username`) VALUES('1', '$name')";
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
<form action="new.php" method='POST'>
<?php
	require 'config.php';
	$name=$_SESSION['username'];
	echo $_SESSION['username'];
	$sqlchk = "SELECT * from `likes` where username='$name' ";
	$sqlchk2 = "SELECT * from `dislikes` where username='$name'";
	$result = $con->query($sqlchk);
	$result2 = $con->query($sqlchk2);
	if(mysqli_num_rows($result) >0||mysqli_num_rows($result2) >0){
		echo '<button name=\'like\' disabled>';
		$sql="SELECT * from `likes`";
		$result=$con->query($sql);
		$count=0;
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
				$count++;
				}
		}
	echo $count.' Likes</button>';
	}else {			
		echo '<button name=\'like\'>';
			$sql1="SELECT * from `likes`";
			$result1=$con->query($sql1);
			$count1=0;
			if(mysqli_num_rows($result1) > 0){
				while($result1->fetch_assoc()){
					$count1++;
					}
			}
			echo $count1.' Likes</button>';
		}
	$con->close();
?> 
<?php
	require 'config.php';
	$sqlchk = "SELECT * from `likes` where username='$name'";
	$sqlchk2 = "SELECT * from `dislikes` where username='$name'";
	$result = $con->query($sqlchk);
	$result2 = $con->query($sqlchk2);
	if(mysqli_num_rows($result) >0||mysqli_num_rows($result2) >0){
		echo '<button name=\'dislike\' disabled>';
		$sql="SELECT * from `dislikes`";
		$result=$con->query($sql);
		$count=0;
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
				$count++;
				}
		}
	echo $count.' Dislikes</button>';
	}else {			
		echo '<button name=\'dislike\'>';
			$sql1="SELECT * from `dislikes`";
			$result1=$con->query($sql1);
			$count1=0;
			if(mysqli_num_rows($result1) > 0){
				while($result1->fetch_assoc()){
					$count1++;
					}
			}
			echo $count1.' Dislikes</button>';
		}
	$con->close();
?> 
</form>
<a href='out.php'>logout</a>