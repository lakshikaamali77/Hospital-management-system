<?php

$con = new mysqli('localhost','root','','hms');

if (!$con) {
	die(mysqli_error($con));
}

?>