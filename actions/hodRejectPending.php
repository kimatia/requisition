<?php
require('../connections/connect.php');
require('../connections/session.php');
$id=$_GET['id'];

	$query="UPDATE requests SET status='rejected' WHERE id='$id'";
	$result=$con->query($query);
	if($result===true){
			header('refresh:1;url=../hodRequisitions.php');
			echo '<script>alert("Item Rejected");</script>'; 
		}
	else{
			header('refresh:1;url=../hodRequisitions.php');
			echo '<script>alert("Item not rejected..Try again");</script>'; 
		}
		

?>