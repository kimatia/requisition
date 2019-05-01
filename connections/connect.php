<?php 
error_reporting(E_ALL ^ E_WARNING);
$con = new mysqli('localhost','root','kimatia7950','requisitionDb');
if ($con->connect_errno){
	die('We are experiencing some problems right now. Try again later...');
} 

?>