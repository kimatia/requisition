<<?php 
require('../connections/connect.php');
require('../connections/session.php');
$id=$_GET['id'];

	$query=" DELETE FROM budgets WHERE Budget_id='$id'";
	$result=$con->query($query);
	if($result===true){
			header('refresh:1;url=../manBudgets.php');
			echo '<script>alert("Budget deleted");</script>'; 
		}
	else{
			header('refresh:1;url=../manBudgets.php');
			echo '<script>alert("Budget not deleted...Try again");</script>'; 
		}
		 ?>