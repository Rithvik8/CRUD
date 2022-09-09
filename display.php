<?php

include 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crud operation</title>
	<style type="text/css">
	*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			display: flex;
			align-items: center;
			justify-content: center;
			margin-top: 70px;
			background: url(4.jpg);
			background-repeat: no-repeat;
			background-size: cover;

		}
		.content-table{
			border-collapse:collapse ;
			margin: 25px 0;
			font-size: 0.9em;
			min-width: 800px;
			border-radius: 5px 5px 0 0;
			overflow: hidden;
			box-shadow:0 0 20px rgba(0, 0, 0, 0.15) ;

		}
		.content-table thead tr{
			background-color: #009879;
			color: white;
			text-align: left;
			font-weight: bold;
		}
		.content-table thead tr:hover{
			background-color: #009800;
		}

		.content-table th,
		.content-table td{
			padding: 12px 15px;
		}
		.content-table tbody tr{
			border-bottom: 1px solid #dddddd;
		}
		.content-table tbody tr:last-of-type{
			border-bottom: 2px solid #009879;
		}
		.container button{
			width: 130px;
			height: 50px;
			border-radius: 20px;
			border: none;
			background-color: #009879;


			}
			.container button:hover{
			background-color: #009800;
		}
		.container{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 10px;
			
			



		}
		.container button a{
			color: white;
			text-decoration: none;
			font-size: 15px;
			font-weight: bold;
		}
		
		.btn1{
			width: 70px;
			height: 25px;
			border-radius: 20px;
			border: none;
			background-color: blue;
			


		}
		.btn1:hover{
			background-color: #0e5087;
		}
		.btn2:hover{
			background-color: #8a2719;
		}
		.btn2{
			width: 70px;
			height: 25px;
			border-radius: 20px;
			border: none;
			background-color: red;
		}
		.btn1 a{
			color: white;
			text-decoration: none;
			font-size: 15px;
			font-weight: bold;
		}
		.btn2 a{
			color: white;
			text-decoration: none;
			font-size: 15px;
			font-weight: bold;
		}



	</style>
</head>
<body>
	<div class="container">
		<button class="add"><a href="user.php">Add Contact list</a></button>
		</div>


	
	<table class="content-table">


		<tbody>
		<thead>
		
		<tr>
			<th>S.no</th>
			<th>name</th>
			<th>email</th>
			<th>mobile</th>
			<th>operation</th>

		</tr>
		


	</thead>

</tbody>

		<?php

		$sql = "Select * from `curd`";
		$result = mysqli_query($con,$sql);

		if($result){
			while($row=mysqli_fetch_assoc($result)){
				$id = $row['id'];
				$name = $row['name'];
				$email = $row['email'];
				$mobile = $row['mobile'];

				echo '<tr>
				<th>'.$id.'</th>
				<td>'.$name.'</td>
				<td>'.$email.'</td>
				<td>'.$mobile.'</td>
				<td>
			<button class ="btn1"><a href="update.php?updateid='.$id.'">Update</a></button>
			<button class = "btn2"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
		</td>
				</tr>';
}
		}

		
		
		?>

		
	</table>
		
	
</body>
</html>