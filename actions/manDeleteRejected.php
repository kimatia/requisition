<<?php 
require('../connections/connect.php');
require('../connections/session.php');
$id=$_GET['id'];

	$query=" DELETE FROM requests WHERE id='$id'";
	$result=$con->query($query);
	if($result===true){
			header('refresh:1;url=../manRequisitions.php');
			echo '<script>alert("Record deleted");</script>'; 
		}
	else{
			header('refresh:1;url=../manRequisitions.php');
			echo '<script>alert("Record not deleted...Try again");</script>'; ;
		}
		 ?>