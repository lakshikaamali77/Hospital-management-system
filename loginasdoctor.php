<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login As Doctor</title>  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;500;700&family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<style>
		body{
			background: url('./drt.jpeg');
			display: flex;
			font-family: sans-serif;
		    background-size: cover;
		 
		} 
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			user-select: none;
		}
		.login{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			padding: 40px;
			color: white;
			font-family: sans-serif;
			background-color: rgba(0, 0, 0, 0.7);
			border-radius: 5px;
			box-shadow: 1px 1px 20px rosybrown;
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 10px 0;
		}

		.login header{
			margin-bottom: 25px;
			margin: 0 0 25px 0;
		}
		img{
			position: relative;
			width: 80px;
			top: 50%;
			border-radius: 50%;
			box-shadow: 1px 1px 15px cyan;
		}

		.field{
			border: 1px solid yellow;
			border-radius: 50px;
			background-color: transparent;
			width: 100%;
			height: 100%;
			margin-bottom: 5px;
			display: flex;
		}
		.field span{
			color: white;
			width: 40px;
			line-height: 46px;
			text-align: center;
		}

		.field input{
			font-size: 1.1rem;
			padding: 5px;
			color: white;
			background-color: transparent;
			border: none;
		}
		.login #email_error,
		.login #pass_error{
			margin-top: 4px;
			width: 340px;
			font-size: 1.1rem;
			color: white;
			background: rgba(255, 0, 0, 0.1);
			text-align: center;
			padding: 5px ;
			border-radius: 50px;
			border: 2px solid #EF9A9A;
			display: none;
		}

		.forget-password{
			width: 100%;
			margin-bottom: 15px;
		}
		.forget-password a{
			color: white;
			text-decoration: none;
		}
		.forget-password a:hover{
			text-decoration: underline;
		}
		.submit{
			display: flex;
			justify-content: center;
			width: 100%;
			height: 45px;
			margin-bottom: 25px;
			font-family: unset;
			font-size: 1.2rem;
			color: white;
			background-color: transparent;
			border: 1px solid red;
			border-radius: 125px;

		}
		.submit:hover{
			cursor: pointer;
			background-color: lightgoldenrodyellow;
		}
		.lofin-form-copy{
			margin-bottom: 15px;
		}
		.lofin-form_sign-up{
			text-decoration: none;
			color: red;
		}
		.social-icons{
			display: flex;
			width: 100%;
			justify-content: space-between;
			padding-bottom: 5px;

		}
		.social-icon{
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 1.4rem;
			width: 50px;
			height: 50px;
			border-radius: 50%;
			cursor: pointer;
			margin-bottom: 25px;
		}
		.facebook{
			background-color: #385998;
		}
		.instagram{
			background: linear-gradient(rgba(243,5,171),rgba(205,95,4), yellow);
		}

		.twitter{
			background-color: #00ACEE;
		}

		.google{
			background-color: #CA3224;
		}
		.linkedin{
			background-color: #0E76AB;
		}

		input:focus,input:hover,input:active{
			outline: none;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="./loginsty.css">
</head>
<body> 
		<header class="sticky">
		<a href="#" class="logo"><i class='bx bxs-first-aid'> <center><font color="darkblue">Arogya Health Care Hospital</center></font></i></a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="Health Care Web site.php"> HOME </a></li>
			<li><a href="photo.html"> GALLARY</a></li>
			<li><a href="#"> APPOINTMENT</a></li>
			<li><a href="department.php"> DEPARTMENTS</a></li>
			<li><a href="login.html"> LOGIN </a></li>
			<li><a href="Aboutt.html"> ABOUT US</a></li>
			<li><a href="contact.html"> CONTACT US </a></li>
		</ul>  

		<div class="top-btn">
			<a href="appoinment.php"> Book An Appointment </a>
		</div>
	</header>

	<form class="login" action="login.php" method="post" name="form" onsubmit="return validated()">
		<header><img src="./doclogo.jpg"></header>
		<h2>Login As a Doctor</h2></br>
		<div class="field"><span class="fa fa-username"><input autocomplete="off" type="text" name="email" placeholder="Email or User name"></span></div>
		<div id="email_error"> Please input your Email Address</div>
		<div class="field"><span class="fa fa-password"><input type="password" name="password" placeholder="Password"></span></div>
		<div id="pass_error"> Please input your Password</div></br>
		<div class="forget-password"><a href="#"> Forgot Password? </a></div>
		<input type="submit" class="submit" value="Login">
		<span class="login-form-copy"> Or login with </span>
		<div class="social-icons">
			<div class="social-icon instagram"> <span class="fa fa-instagram"></span></div>
			<div class="social-icon facebook"> <span class="fa fa-facebook"></span></div>
			<div class="social-icon google"> <span class="fa fa-google"></span></div>
			<div class="social-icon linkedin"> <span class="fa fa-linkedin"></span></div>
			<div class="social-icon twitter"> <span class="fa fa-twitter"></span></div>
		</div>
		<span class="login-form-copy"> Don't have an account? <a href="#" class="login-form_sign-up"> Sign Up </a></span>
	</form>

	<script src="valid.js"></script>

	
</body>
</html>