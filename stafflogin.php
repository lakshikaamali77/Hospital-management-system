<?php 
  $username = $_POST['username'];
  $password = $_POST['password'];

  //Database connection 
  $con = new mysqli("localhost","root","","loginsystem");
  if ($con->connect_error) {
  	die("Failed to Connection:".$con->connect_error);
  }else{
  	$stmt = $con->prepare("SELECT * FROM `logstaff` WHERE username = ?");
  	$stmt->bind_param("s",$username);
  	$stmt->execute();
  	$stmt_result = $stmt->get_result();
  	if ($stmt_result->num_rows > 0) {
  		$data = $stmt_result->fetch_assoc();
  		if ($data ['password']) {
  			echo "<h2> LOGIN SUCCESSFULLY</h2>";
  		}else{
  			echo "<h2> INVALID USERNAME OR PASSWORD </h2>";
  		}
  		
  	}else{
  		echo "<h2> INVALID USERNAME OR PASSWORD </h2>";
  	}
  }


 ?>