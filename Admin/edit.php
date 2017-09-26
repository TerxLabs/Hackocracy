<?php
require 'config.php';
if(isset($_POST['edit']))
    {
    	$id=$_POST['id'];
        $pname=$_POST['pname'];
        $pstate=$_POST['pstate'];
        $ptag=$_POST['ptag'];
        $result= $con->query("UPDATE `problem` SET `name`='$pname',`description`='$pstate',`tag`='$ptag' WHERE id='$id' ");
        
        
        //echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }

?>