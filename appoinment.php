<?php
 include 'connect.php';
 if (isset($_POST['add'])) {
 	$ApponimentID  = $_POST['appimentid'];
    $patientname = $_POST['patientname'];
    $email= $_POST['email'];
    $doctorname = $_POST['doctorname'];
    $special = $_POST['specialzation'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];


    $sql ="insert into anappoi(appimentid,patientname,email,doctorname,specialzation,time,date,gender) values('$ApponimentID','$patientname','$email','$doctorname','$special','$time','$date','$gender')"; 
    $result=mysqli_query($con,$sql);
		
		if($result) {
			echo "Data Inserted Sucessfully!....";
			header('location:displayappoi.php');
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
	<title>Make An Appointment</title>
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
			background: url("./app.jpg");
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
		.option-container{
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
		<div class="title"> An Apponiment Form  </div><br>
		<form method="post">
			<div class="user-details">
				<div class="input-box">
					<span class="details"> Apponiment ID </span>
					<input type="text" placeholder="Enter your ID" name="appimentid" required>
				</div>
				<div class="input-box">
					<span class="details"> Patient Name </span>
					<input type="text" placeholder="Enter your Patient Name" name="patientname" required>
				</div>
				<div class="input-box">
					<span class="details"> Email </span>
					<input type="Email" placeholder="Enter your Email" name="email" required>
				</div>
				<div class="input-box">
					<span class="details"> Doctor Name </span>
					<input type="text" placeholder="Enter your Name" name="doctorname" required>
				</div>
				<div class="input-box">
					<span class="details"> Specialization </span>
					<input type="text" placeholder="Enter your Specialization" name="specialzation" required>
				</div>
				<div class="input-box">
					<span class="details"> Time </span>
					<input type="Time" placeholder="Enter your Time" name="time" required>
				</div>
				<div class="input-box">
					<span class="details"> Date </span>
					<input type="date" name="date" placeholder="Date" required>
				</div>
				

			</div>
			<div class="radio-container">
			<span class="gender-details"> Gender</span>
			

			&nbsp;&nbsp;&nbsp;

				<input type="radio" name="gender" id="male" required>
				&nbsp;
				<span id="male">Male</span>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" id="female" required>
				&nbsp;
				<span id="female"> Female </span></div>



			<br>
			
			<div class="button">

				<input type="submit" name="add" value="BOOK NOW">
			</div>
		</form>
	</div>


</body>
</html>