<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hms';
$scheduleid = $_POST['schduleid'];
$staffid = $_POST['staffid'];
$staffname = $_POST['name'];
$room = $_POST['room'];
$shift = $_POST['shift'];
$time = $_POST['time'];
$date = $_POST['date'];
$gender = $_POST['gender'];


//Database connection 

$conn = new mysqli($servername, $username, $password, $dbname);    
//check connection 
if($conn->connect_error){
	die('Connecttion Failed : '. $conn->connect_error);
}
	$sql ="insert into newstaff(scheduleid,staffid,staffname,room,shift,time,date,gender) 
		VALUES ('$scheduleid','$staffid','$staffname','$room','$shift','$time','$date','$gender')";
	if ($conn->query($sql) === TRUE) {
		echo "All Saved";
	}else{
		echo "Error: ". $sql . "<br>" . $conn->error;
	}
	$conn->close();



 ?>



