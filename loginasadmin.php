<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login As a Administrator</title>  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body{
			background: url('./admin.jpeg');
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
			background-color: blue;
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

</head>
<body> 
	<form action="adminlog.php" method="post"  class="login">
		<header><img src="./adminlogo.jpg"></header>
		<h2>Login As a Administrator</h2><br>
		<div class="field"><span class="fa fa-username"><input type="text" name="email" placeholder="Email or User name"></span></div>
		<div class="field"><span class="fa fa-password"><input type="password" name="password" placeholder="Password"></span></div>
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

</body>
</html>