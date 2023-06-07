<?php
 include 'connect.php';
 if (isset($_POST['add'])) {
 	 $admin = $_POST['admin'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender']


    $sql ="insert into adminreg(admin,firstname,lastname,dateofbirth,address,phone,email,password,gender) values('$admin','$firstname','$lastname','$dateofbirth','$address','$phone','$email','$password','$gender')";
    $result=mysqli_query($con,$sql);
		
		if($result) {
			echo '<script>alert("REGISTER SUCESSFULLY")</script>';
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
	<title> Administrator Register</title>
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
			background: url("./adminba.jpg");
			background-size: cover;
		}
		.container{
			max-width: 700px;
			width: 100%;
			background: transparent;
			background-color: white;
			padding: 25px 30px;
			border-radius: 10px;
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
			background: yellow;
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
		.nsbp{
			color: white;
		}
		.user-details .input-box input:focus,
		.user-details .input-box input:valid{
			border-color: royalblue;
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
		<div class="title"> Administrator Register Form </div><br>
		<form method="post">
			<div class="user-details">
				<div class="input-box">
					<span class="details"> Administrator ID </span>
					<input type="text" placeholder="Enter your ID" name="admin" required>
				</div>
				<div class="input-box">
					<span class="details"> First Name </span>
					<input type="name" placeholder="Enter your First Name" name="firstname" required>
				</div>
				<div class="input-box">
					<span class="details"> Last Name </span>
					<input type="name" placeholder="Enter your Last Name" name="lastname" required>
				</div>
				<div class="input-box">
					<span class="details"> Date of Birth </span>
					<input type="date" placeholder="Enter your Birthday" name="dateofbirth" required>
				</div>
				<div class="input-box">
					<span class="details"> Address </span>
					<input type="Address" placeholder="Enter your Address" name="address" required>
				</div>
				<div class="input-box">
					<span class="details"> Phone Number</span>
					<input type="number" placeholder="Enter your Phone Number" name="phone" required>
				</div>
				<div class="input-box">
					<span class="details"> Email Address </span>
					<input type="Email" placeholder="Enter your Email" name="email" required>
				</div>
				<div class="input-box">
					<span class="details"> Password </span>
					<input type="password" placeholder="Enter your Password" name="password" required>
				</div>

			</div>



			<br>
			<div class="input-box">
			<span class="gender-details"> Gender</span>
			<div class="input-box">

			    &nbsp;&nbsp;&nbsp;
			    <input type="radio" name="gender" value="m" id="male" required>
				&nbsp;
				<span id="male">Male</span>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" value="f" id="female" required>
				&nbsp;
				<span id="female"> Female </span></div>
			<div class="button">
				<input type="submit" name="add" value="Register Now">
			</div>
		</form>
	</div>


</body>
</html>