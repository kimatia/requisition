<?php
require('../connections/connect.php');
require('../connections/session.php');
$id=$_GET['id'];

	$query="UPDATE requests SET status='flagged' WHERE id='$id'";
	$result=$con->query($query);
	if($result===true){
			header('refresh:1;url=../hodRequisitions.php');
			echo '<script>alert("Item Flagged");</script>'; 
		}
	else{
			header('refresh:1;url=../hodRequisitions.php');
			echo '<script>alert("Item not flagged...Try again");</script>'; 
		}
		

?>