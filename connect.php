<?php
$con = new mysqli('localhost','root','','curdoperation');

if(!$con){
	die(mysqli_error($con));
}

?>