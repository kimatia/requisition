<?php 

require('../connections/connect.php');
		$firstname=$_POST['inputFName'];
		$lastname=$_POST['inputLName'];
		$email=$_POST['inputEmail'];
		$username=$_POST['inputUName'];
		$password=$_POST['inputPassword'];
		$faculty=$_POST['faculty'];
		if($faculty==='catering'){$faculty_id=2;}
		if($faculty==='engineering'){$faculty_id=3;}
		if($faculty==='medicine'){$faculty_id=4;}

$query="SELECT * FROM login WHERE username='$username' ";
	$result=$con -> query($query);
		if($result->num_rows>0){echo '<script>alert("Username already in use");</script>'; header('refresh:1;url=../signup.php');}else {
$insertquery="INSERT INTO login(firstname,lastname,email,username,password,faculty,faculty_id) VALUES('$firstname','$lastname','$email','$username','$password','$faculty','$faculty_id')";


	

if($con->query($insertquery)===true){
	header('refresh:1;url=../login.php');
	echo '<script>alert(" Account Created");</script>';
}
else {header('refresh:1;url=../login.php'); 
			echo '<script>alert("Seems something went wrong. Try again");</script>';}}


	
	
 ?>