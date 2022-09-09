<?php
include 'connect.php';
error_reporting(0);
$id=$_GET['updateid']; 
$sql="Select * from `curd` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];


if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];

$sql ="update`curd` set id=$id,name='$name',email='$email',mobile='$mobile' where id= $id  ";
$result = mysqli_query($con,$sql);
 if($result){
 	header('location:display.php'); 

 }
 else{

 	die(mysqli_error($con));
}
 }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Curd Operstion</title>
	<style type="text/css">
	* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
	background: url(3.jpg);
	background-repeat: no-repeat;
	background-size: cover;
  
  
  font-family: sans-serif;
}
.container {
  height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
}
form {
  position: relative;
  width: 100%;
  max-width: 380px;
  padding: 80px 40px 40px;
  background: rgba(0,0,0,0.7);
  border-radius: 10px;
  color: #fff;
  box-shadow: 0 15px 25px rgba(0,0,0,0.5);
}
form::before {
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255,255,255, 0.08);
  transform: skewX(-26deg);
  transform-origin: bottom left;
  border-radius: 10px;
  pointer-events: none;
}

form h2 {
  text-align: center;
  letter-spacing: 1px;
  margin-bottom: 2rem;
  color: #ff652f;
}
form .group-form {
  position: relative;
}
form .group-form input {
  width: 100%;
  padding: 10px 0;
  font-size: 1rem;
  letter-spacing: 1px;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background-color: transparent;
  color: white;
}
 

 input:focus + label{
  transform: translateY(-18px);
  color: #ff652f;
  font-size: .8rem;
}
.submit-btn {
  display: block;
  margin-left: auto;
  border: none;
  outline: none;
  background: #ff652f;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

	</style>
</head>
<body>
	<div class="container">
		
		<form method="post">
			<h2>Contact List</h2>
			<div class="group-form">
				<label>Name</label>
				<input type="text" name="name" placeholder="Enter  Name" value="<?php echo $name;?>">
			</div>
			<div class="group-form">
				<label>Email</label>
				<input type="email" name="email" placeholder="Enter Email" value="<?php echo $email;?>">
			</div>
			
			<div class="group-form">
				<label>mobile</label>
				<input type="number" name="mobile" placeholder=" Enter Phone Number" value="<?php echo $mobile;?>">
			</div>
			
				<input class="submit-btn" type="submit" name="submit" value="update">
			
		</form>
	</div>

</body>
</html>