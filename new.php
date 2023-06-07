<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "hms";
$scheduleid = $_POST['schduleid'];
$staffid = $_POST['staffid'];
$staffname = $_POST['name'];
$room = $_POST['room'];
$shift = $_POST['shift'];
$time = $_POST['time'];
$date = $_POST['date'];
$gender = $_POST['gender'];



// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);



// Check connection

if (!$conn) {

   die("Connection failed: " . mysqli_connect_error());

}else{
   $sql ="insert into stafsched(staffid, name, room, shift, time, date, gender) values('$staffid','$staffname','$room','$shift','$time','$date','$gender')";

}

echo "Connected successfully";

?>