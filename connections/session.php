<?php if(!isset($_SESSION)){
	session_start();
}
 
 if(!isset($_SESSION['id'])){
 	echo "<script>window.open('login.php','_self');</script>";
 }

?>