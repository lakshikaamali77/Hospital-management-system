<?php
 include 'connect2.php';
   if (isset($_POST['add'])) {
 	$doctorid = $_POST['doctorid'];
 	$name = $_POST['name'];
 	$special = $_POST['special'];
 	$address = $_POST['address'];
 	$doctorcharges = $_POST['doctorchages'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $slmcregister = $_POST['slmcregister'];
   $date = $_POST['date'];
   $gender = $_POST['gender'];


    $sql ="insert into doctor(doctorid, name,special, address, doctorchages, phone, email,slmcregister, date,gender) values('$doctorid','$name','$special','$address','$doctorcharges','$phone','$email','$slmcregister','$date','$gender')";

    $result=mysqli_query($con,$sql);
		
		if($result) {
			echo "REGISTER SUCESSFULLY....!";
			header('location:displaydocreg.php');
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
	<title> Doctor Register</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

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
			background: url("./docregba.jpg");
			background-size: cover;
		}
		.container{
			max-width: 700px;
			width: 100%;
			background: transparent;
			background-color: white;
			padding: 25px 30px;
			border-radius: 5px;
			box-shadow: red;
		}
		.container .title{
			font-size: 35px;
			font-weight: 800;
			text-align: center;
			color: darkblue;
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
			color: black;
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
			color: black;
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
			color: white;
			border: none;
			font-size: 18px;
			font-weight: 500;
			font-family: initial;
			letter-spacing: 1px;
			border-radius: 6px;
			background: darkblue;
		}
		form .button input:hover{
			background: blue;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="title"> Doctor Registration Form </div><br>
		<form method="post">
			<div class="user-details">
				<div class="input-box">
					<span class="details"> Doctor ID </span>
					<input type="text" placeholder="Enter your ID" name="doctorid" required>
				</div>
				<div class="input-box">
					<span class="details"> Name </span>
					<input type="text" placeholder="Enter your Name" name="name" required>
				</div>
				<div class="input-box">
					<span class="details"> Specialization </span>
					<input type="section" placeholder="Enter your Specialization" name="special" required>
				</div>
				<div class="input-box">
					<span class="details"> Address </span>
					<input type="text" placeholder="Enter your Address" name="address" required>
				</div>
				<div class="input-box">
					<span class="details"> Doctor Charges </span>
					<input type="text" placeholder="Enter your Charges" name="doctorchages" required>
				</div>
				<div class="input-box">
					<span class="details"> Phone Number </span>
					<input type="number" placeholder="Enter your Phone Number" name="phone" required>
				</div>
				<div class="input-box">
					<span class="details"> Email Address </span>
					<input type="email" placeholder="Enter your Email" name="email" required>
				</div>
				<div class="input-box">
					<span class="details"> SLMC Register Number </span>
					<input type="number" placeholder="Enter your Register Number" name="slmcregister" required>
				</div>
				<div class="input-box">
					<span class="details"> Date </span>
					<input type="date" placeholder="Date" name="date" required>
				</div>
				

			</div>



			<br>
			<div class="input-box">
			<span class="gender-details"> Gender</span>
			<div class="input-box">

			&nbsp;&nbsp;&nbsp;

				<input type="radio" name="gender" id="male" value="m" required >
				&nbsp;
				<span id="male">Male</span>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" id="female" value="f" required>
				&nbsp;
				<span id="female"> Female </span></div>
			<div class="button">
				<input type="submit" name="add" value="Register">
			</div>
		</form>
	</div>


</body>
</html>