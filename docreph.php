<?php 
$doctorID = $_POST['doctorid'];
$name = $_POST['name'];
$specialzation = $_POST['specialization'];
$address = $_POST['address'];
$doctorcharges = $_POST['doccharges'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$slmcregister = $_POST['slmcregister'];
$date = $_POST['date'];
$gender = $_POST['gender'];

if (!empty($doctorID) || !empty($name) || !empty($specialization) || !empty($address) || !empty($doctorcharges) || !empty($phone) || !empty($email || ! empty($slmcregister) || !empty($date) || !empty($gender))
	//create connection 
	$conn = new mysqli($host, $dbdname, $dbpassward, $dbname);

	if (mysqli_connect_error()){
		die('Connect Error ('.mysqli_connect_erroro().')'.mysqli_connect_error());
	}else{
		$SELECT = "SELECT email FROM `doctor` WHERE email =? Limit 1";
		$INSERT = "INSERT INTO doctor (doctorid, name, specialzation, address, doctorcharges, phone, email, slmcregister, date, gender) value(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		//prepate 
		$stmt = $conn->prepare(SELECT);
		$stmt -> bind_param("s" $email);
		$stmt -> excute();
		$stmt -> bind_result($email);
		$stmt -> store_result();
		$stmt = $stmt -> num_rows;

		if ($rnum ==0) {
			$stmt -> close();

			$stmt = $conn-> prepare($INSERT);
			$stmt -> bind_param ("ssssii", $doctorID, $name, $specialzation, $address, $doctorcharges, $phone, $email, $slmcregister, $date, $gender);
			$stmt->excute();
			echo "Saved";
			// code...
		} else {
			echo "string";

		}
		$stmt-> close;
		$conn-> close;

	}
	// code...
} else {
	echo "All Saved";
	die();

 }
 ?>
