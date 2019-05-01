<?php 
require('../connections/connect.php');
require('../connections/session.php');
$id=$_GET['id'];

	$query=" DELETE FROM orders WHERE order_no='$id'";
	$result=$con->query($query);
	if($result===true){
			header('refresh:1;url=../manOrders.php');
			echo '<script>alert("Order deleted");</script>'; 
		}
	else{
			header('refresh:1;url=../manOrders.php');
			echo '<script>alert("Order not deleted...Try again");</script>'; 
		}
		 ?>
		

?>