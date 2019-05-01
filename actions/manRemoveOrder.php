<?php
require('../connections/connect.php');
require('../connections/session.php');
$id=$_GET['id'];

	$query="UPDATE requests SET status='finalflagged' WHERE id='$id'";
	$result=$con->query($query);
	if($result===true){
			header('refresh:1;url=../manOrders.php');
			echo '<script>alert("Item Removed");</script>'; 
		}
	else{
			header('refresh:1;url=../manOrders.php');
			echo '<script>alert("Item not removed..Try again");</script>'; 
		}
		

?>