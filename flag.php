<?php
require('connections/connect.php');
require('connections/session.php');
$id=$_GET['id'];
$stmt=$con->prepare("UPDATE requests SET flag=? WHERE employeeid=$_SESSION[id] AND id=$id ");

$query="SELECT * FROM requests WHERE employeeid=$_SESSION[id]";
$result=$con->query($query);
while ($row=mysqli_fetch_assoc($result)) {
	if ($flag_state="YES") { 
		$new_flag_state="NO";
		$stmt->bind_param('s',$new_flag_state);
		$stmt->execute();
		$stmt->close();	
	}
}

echo $new_flag_state;

?>