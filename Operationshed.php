<?php
 include 'connect.php';
 if (isset($_POST['add'])) {
 	$operationid = $_POST['operationid'];
    $operation = $_POST['operation'];
    $doctername = $_POST['docname'];
    $operationroomnumber  = $_POST['operationroom'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];


    $sql ="insert into operationsed(operationid,operation,docname,operationroom,time,date,gender) values ('$operationid ','$operation','$doctername','$operationroomnumber','$time','$date','$gender')";

    $result=mysqli_query($con,$sql);
		
		if($result) {
			echo "Data Inserted Sucessfully!....";
			header('location:displayoperation.php');
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
	<title> Operating Theater Scheduling</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;500;700&family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: sans-serif;
			list-style: none;
	      text-decoration: none;
	      scroll-behavior: smooth;
		}
		body{
			display: flex;
			height: 100vh;
			justify-content: center;
			align-items: center;
			background: url("./opera.jpg");
			background-size: cover;
		}
		header{
	      position: fixed;
	      width: 100%;
	      right: 0;
	      top: 0;
	      display: flex;
	      align-items: center; 
	      justify-content: space-between;
	      background: white;
	      padding: 2px 60%;
	      z-index: 1000;
	      transition: all .35s ease;
	      text-decoration: none;
}

.logo{
	      font-size: 20px;
	      text-align: center;
}
.logo i{
	      max-width: 100%;
	      width: 150px;
	      height: auto;
	

}
.navbar {
	      display: flex;
	      align-items: center;
}
.navbar a{
	      font-size: 15px;
	      color: darkblue;
	      padding: 6px 17px;
	      font-weight: 700;
	      transition: all .25s ease;

}
.navbar a:hover{
	      color: red;
	      text-decoration: none;
}

#menu-icon{
	      color: darkblue;
	      font-size: 40px;
	      z-index: 10001;
	      cursor: pointer;
	      display: none;
}
.top-btn a{
	      display: inline-block;
	      background: red;
	      color: white;
	      text-decoration: none;
	      padding: 15px 32px;
	      border-radius: 30px;
	      border: none;
	      font-size: 17px;
	      font-weight: 700;
}
header.sticky{
	      background: yellow;
	      padding: 10px 4%;
	      box-shadow: 0px 0px 1px #13084982;

}        

section {
	      padding: 80px 18%;
}
.home {
	      height: 90vh;
	      width: 100%;
	
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
	<header class="sticky">
		<a href="#" class="logo"><i class='bx bxs-first-aid'> <center><font color="darkblue">Arogya Health Care Hospital</center></font></i></a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="Health Care Web site.php"> HOME </a></li>
			<li><a href="photo.html"> GALLARY</a></li>
			<li><a href="#"> APPOINTMENT</a></li>
			<li><a href="#"> DEPARTMENTS</a></li>
			<li><a href="login.html"> LOGIN </a></li>
			<li><a href="Aboutt.html"> ABOUT US</a></li>
			<li><a href="contact.html-active"> CONTACT US </a></li>
		</ul>  

		<div class="top-btn">
			<a href="appoinment.php"> Book An Appointment </a>
		</div>
	</header>  <br> 
	<br>
	<section class="home">
	<div class="container">
		<div class="title"> Operating Theater Scheduling  </div><br>
		<form method="post">
			<div class="user-details">
				<div class="input-box">
					<span class="details"> Operating ID </span>
					<input type="text" placeholder="Enter your ID" name="operationid" required>
				</div>
				<div class="input-box">
					<span class="details"> Operation </span>
					<input type="text" placeholder="Enter your Operation" name="operation" required>
				</div>
				<div class="input-box">
					<span class="details"> Doctor Name </span>
					<input type="text" placeholder="Enter your Name" name="docname" required>
				</div>
				<div class="input-box">
					<span class="details"> Operation Theater Room Number </span>
					<input type="number" placeholder="Enter your Room Number" name="operationroom" required>
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



			<br>
			<div class="radio-container">
			<span class="gender-details"> Gender</span>
			

			&nbsp;&nbsp;&nbsp;

				<input type="radio" name="gender" value="m" id="male" required>
				&nbsp;
				<span id="male">Male</span>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" value="f" id="female" required>
				&nbsp;
				<span id="female"> Female </span></div>
			<div class="button">
				<input type="submit" name="add" value="ADD">
			</div>
		</form>
	</div></section>


</body>
</html>