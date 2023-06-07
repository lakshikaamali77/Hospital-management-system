<?php
 include 'connect.php';
 $id=$_GET['updareid'];
$sql ="Select * from `newstaff` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$scheduleid = $row['scheduleid'];
$staffid = $row['staffid'];
$staffname = $row['staffname'];
$room = $row['room'];
$shift = $row['shift'];
$time = $row['time'];
$date = $row['date'];
$gender = $row['gender'];

 if(isset($_POST['add'])) {
 	$scheduleid = $_POST['schduleid'];
    $staffid = $_POST['staffid'];
    $staffname = $_POST['name'];
    $room = $_POST['room'];
    $shift = $_POST['shift'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];


    $sql ="UPDATE `newstaff` SET `id`='$id',`scheduleid`='$scheduleid',`staffid`='$staffid',`staffname`='$staffname',`room`='$room',`shift`='$shift',`time`='$time',`date`='$date',`gender`='$gender' WHERE id=$id";
    $result=mysqli_query($con,$sql);
		
		if($result) {
			echo '<script>alert("Update Sucessfully")</script>';
			//header('location:dispalystaff.php');
		}else{
			die(mysqli_error($con));
		}
 	
 }




 ?>








<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Staff Scheduling</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: sans-serif;
		}
		body{
			display: flex;
			height: 100vh;
			justify-content: center;
			align-items: center;
			background: url("./sed.jpg");
			background-size: cover;
		}
		.container{
			max-width: 700px;
			width: 100%;
			background: transparent;
			background-color: rgba(0, 0, 0, 0.6);
			padding: 25px 30px;
			border-radius: 5px;
			box-shadow: red;
		}
		.container .title{
			font-size: 35px;
			font-weight: 700;
			text-align: center;
			color: white;
			font-family: sans-serif;
		}
		.container .title:before{
			content: ;
			position: absolute;
			height: 3px;
			width: 30px;
			background: linear-gradient(135deg, #71b7e6, #9b59b6);
		}
		.container form .user-details{
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			font-weight: 200;
			color: white;
		}
		form .user-details .input-box{
			margin-bottom: 15px;
			width: calc(100% / 2 - 20px);

		}
		.user-details .input-box .details{
			display: block;
			font-weight: 500;
			margin-bottom: 5px;
		}
		.user-details .input-box input{
			height: 45px;
			width: 100%;
			outline: none;
			border-radius: 5px;
			border: 1px solid #ccc;
			padding-left: 15px;
			font-size: 16px;
			border-bottom-width: 2px;

		}
		.gender-details{
			color: white;
		}
		.radio-container{
			color: white;
		}
		.user-details .input-box input:focus,
		.user-details .input-box input:valid{
			border-color: black;
		}
		
		
		form .button{
			height: 45px;
			margin: 45px 0;
			font-family: serif;

		}
		form .button input{
			height: 100%;
			width: 100%;
			outline: none;
			color:white;
			font-weight: 300;
			border: none;
			font-size: 18px;
			font-weight: 500;
			font-family: initial;
			letter-spacing: 1px;
			border-radius: 6px;
			background: blue;
		}
		form .button input:hover{
			background: lightblue;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="title"> Staff Scheduling Form  </div><br>
		<form method="post">
			<div class="user-details">
				<div class="input-box">
					<span class="details"> Schedule ID </span>
					<input type="text" placeholder="Enter your ID" name="schduleid" value="<?php echo $scheduleid;?>" required>
				</div>
				<div class="input-box">
					<span class="details"> Staff ID </span>
					<input type="text" placeholder="Enter your ID" name="staffid" value="<?php echo $staffid;?>" required>
				</div>
				<div class="input-box">
					<span class="details"> Staff Name </span>
					<input type="text" placeholder="Enter your Name" name="name" value="<?php echo $staffname;?>" required>
				</div>
				<div class="input-box">
					<span class="details">  Room Number </span>
					<input type="number" placeholder="Enter your Room Number" name="room" value="<?php echo $room;?>" required>
				</div>
				<div class="input-box">
					<span class="details">  Shift </span>
					<input type="text" placeholder="Enter your Shift" name="shift" value="<?php echo $shift;?>" required>
				</div>
				<div class="input-box">
					<span class="details"> Time </span>
					<input type="Time" placeholder="Enter your Time" name="time" value="<?php echo $time;?>" required>
				</div>
				<div class="input-box">
					<span class="details"> Date </span>
					<input type="date" placeholder="Date" name="date" value="<?php echo $date;?>" required>
				</div>
				

			</div>



			<br>
			<div class="radio-container">
			<span class="gender-details"> Gender</span>
			

			&nbsp;&nbsp;&nbsp;

				<input type="radio" name="gender" id="male" value="<?php echo $gender;?>" required>
				&nbsp;
				<span id="male">Male</span>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" id="female" value="<?php echo $gender;?>" required>
				&nbsp;
				<span id="female"> Female </span></div>
			<div class="button">
				<input type="submit" name="add" value="UPDATE">
			</div>
		</form>
	</div>


</body>
</html>