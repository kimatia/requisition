<?php 
require('../connections/connect.php');
require('../connections/session.php');

if(!empty($_POST['checkboxPending'])){
	foreach ($_POST['checkboxPending'] as $checkboxPending) {
		echo $checkboxPending;
		# code...
	}
}
/*$id=$_GET['id'];

	$query=" DELETE FROM requests WHERE id='$id'";
	$result=$con->query($query);
	if($result===true){
			header('refresh:1;url=../userRequisitions.php');
			echo '<script>alert("Record deleted");</script>'; 
		}
	else{
			header('refresh:1;url=../userRequisitions.php');
			echo '<script>alert("Record not deleted...Try again");</script>'; ;
		}*/
		 ?>