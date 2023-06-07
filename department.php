<?php 
include 'connect2.php';

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <style type="text/css">
        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      background: white;
    }
    .table-striped{
      background-color: rgba(0, 0, 0, 0.6);
    }
    .table-striped th{
      color: white;
    }
    .table-striped td{
      color: white;
    }
    .container h1{
      color: black;
      font-family: sans-serif;
      font-weight: 700;
    }
    .back1{
      background: url('./infoad.jpg');
      background-size: cover;
    }
    .back2 {
      background: url('./docba.jpg');
      background-size: cover;
    }
    .back3{
      background: url('./infostaff.jpg');
      background-size: cover;
    }
  </style>
	
</head>
<body>
  <section class="back1">

	<div class="container">
		<button class="btn btn-primary my-5"> <a href="adminreg.php" class="text-light">ADD USER</a></button>  

		<br>
		<center><h1>Administrator registration Information </h1></center>
		<br>

		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Administrator ID </th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th> 
      <th scope="col">Gender</th>
      <th scope="col"> Oparations</th>
    </tr>
  </thead>
  <tbody>  

  	<?php 
  	$sql = "Select * from `adminreg`";
  	$result=mysqli_query($con,$sql);
  	if ($result) {
  		while ($row=mysqli_fetch_assoc($result)) {
  			    $id = $row ['id'];
  			    $admin = $row['admin'];
            $firstname= $row['firstname'];
            $lastname = $row['lastname'];
            $dateofbirth = $row['dateofbirth'];
            $phone = $row['phone'];
            $email = $row['email'];
            $gender = $row['gender'];
            echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$admin.'</td>
      <td>'.$firstname.'</td>
      <td>'.$lastname.'</td>
      <td>'.$dateofbirth.'</td> 
      <td>'.$phone.'</td>
      <td>'.$email.'</td> 
      <td>'.$gender.'</td>
      <td>
 	<button class="btn btn-success"><a href="update.php?updareid='.$id.'" class="text-light">UPDATE </a></button>
 	<button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-light"> DELETE </a></button>
 </td>
    </tr>';
  		}

  	}

 ?>

   
  </tbody>
</table>
	</div>
</section>

  <section class="back2">
    
      <div class="container">
    <button class="btn btn-primary my-5"> <a href="docreg.php" class="text-light">ADD USER</a></button>  

    <br>
    <center><h1> Doctor Registation Information </h1></center>
    <br>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Dcoter ID</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Specialzation</th> 
      <th scope="col">Phone Number</th> 
      <th scope="col">SLMC </th>
      <th scope="col"> Date</th>
      <th scope="col"> Gender</th>
      <th scope="col"> Operation</th>
    </tr>
  </thead>
  <tbody>  

    <?php 
    $sql = "SELECT * FROM `doctor`";
    $result=mysqli_query($con,$sql);
    if ($result) {
      while ($row=mysqli_fetch_assoc($result)) {
         $id = $row ['id'];
         $doctorID = $row['doctorid'];
         $doctorname = $row['name'];
         $special = $row['special']; 
         $phone = $row['phone'];
         $slmcregister = $row['slmcregister'];
         $date = $row['date'];
         $gender = $row['gender'];
            echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$doctorID.'</td>
      <td>'.$doctorname.'</td>
      <td>'.$special.'</td>
      <td>'.$phone.'</td>
      <td>'.$slmcregister.'</td>
      <td>'.$date.'</td>
      <td>'.$gender.'</td>
      <td>
  <button type="button" class="btn btn-success updareid"> UPDATE </button>
  <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-light"> DELETE </a></button>
 </td>
    </tr>';
      }

    }

 ?>

   
  </tbody>
</table>
  </div>
  </section>

  <section class="back3">
    

  <div class="container">
    <button class="btn btn-primary my-5"> <a href="stshed.php" class="text-light">ADD USER</a></button>  

    <br>
    <center><h1>Staff Scheduling Information </h1></center>
    <br>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Schedule ID</th>
      <th scope="col">Staff ID</th>
      <th scope="col">Staff Name</th>
      <th scope="col">Room Number</th>
      <th scope="col">Shift</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Gender</th>
      <th scope="col"> Oparations</th>
    </tr>
  </thead>
  <tbody>  

    <?php 
    $sql = "Select * from `newstaff`";
    $result=mysqli_query($con,$sql);
    if ($result) {
      while ($row=mysqli_fetch_assoc($result)) {
        $id = $row ['id'];
        $scheduleid = $row['scheduleid'];
            $staffid = $row['staffid'];
            $staffname = $row['staffname'];
            $room = $row['room'];
            $shift = $row['shift'];
            $time = $row['time'];
            $date = $row['date'];
            $gender = $row['gender'];
            echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$scheduleid.'</td>
      <td>'.$staffid.'</td>
      <td>'.$staffname.'</td>
      <td>'.$room.'</td>
      <td>'.$shift.'</td>
      <td>'.$time.'</td>
      <td>'.$date.'</td>
      <td>'.$gender.'</td>
      <td>
  <button class="btn btn-success"><a href="update.php?updareid='.$id.'" class="text-light">UPDATE </a></button>
  <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
 </td>
    </tr>';
      }

    }

 ?>

   
  </tbody>
</table>
  </div>
  </section>

  <section>
    
  <div class="container">
    <button class="btn btn-primary my-5"> <a href="appoinment.php" class="text-light">ADD USER</a></button>  

    <br>
    <center><h1>An Appointments Information </h1></center>
    <br>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Appoiment ID </th>
      <th scope="col">Patient Name </th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Specialization</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Gender</th>
      <th scope="col"> Oparations</th>
    </tr>
  </thead>
  <tbody>  

    <?php 
    $sql = "SELECT * FROM `anappoi`";
    $result=mysqli_query($con,$sql);
    if ($result) {
      while ($row=mysqli_fetch_assoc($result)) {
            $id = $row ['id'];
            $ApponimentID = $row['appimentid'];
            $patientname = $row['patientname'];
            $doctorname = $row['doctorname'];
            $special = $row['specialzation'];
            $time = $row['time'];
            $date = $row['date'];
            $gender = $row['gender'];
            echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$ApponimentID.'</td>
      <td>'.$patientname.'</td>
      <td>'.$doctorname.'</td>
      <td>'.$special.'</td>
      <td>'.$time.'</td>
      <td>'.$date.'</td>
      <td>'.$gender.'</td>
      <td>
  <button class="btn btn-success"><a href="update.php?updareid='.$id.'" class="text-light">UPDATE </a></button>
  <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-light"> DELETE </a></button>
 </td>
    </tr>';
      }

    }

 ?>

   
  </tbody>
</table>
  </div>

  </section>

  <section class="back">
      <div class="container">
    <button class="btn btn-primary my-5"> <a href="appoinment.php" class="text-light">ADD USER</a></button>  

    <br>
    <center><h1> Medical History Information </h1></center>
    <br>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Patient ID </th>
      <th scope="col">Doctor ID </th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Medical History</th>
      <th scope="col">Date</th>
      <th scope="col">Gender</th>
      <th scope="col"> Oparations</th>
    </tr>
  </thead>
  <tbody>  

    <?php 
    $sql = "SELECT * FROM `medicalhis`";
    $result=mysqli_query($con,$sql);
    if ($result) {
      while ($row=mysqli_fetch_assoc($result)) {
            $id = $row ['id'];
            $patientid = $row['patietid'];
            $docid = $row['docid'];
            $email = $row['email'];
            $address = $row['address'];
            $medihis = $row['medihis'];
            $date = $row['date'];
            $gender = $row['gender'];
            echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$patientid.'</td>
      <td>'.$docid.'</td>
      <td>'.$email.'</td>
      <td>'.$address.'</td>
      <td>'.$medihis.'</td>
      <td>'.$date.'</td>
      <td>'.$gender.'</td>
      <td>
  <button class="btn btn-success"><a href="update.php?updareid='.$id.'" class="text-light">UPDATE </a></button>
  <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-light"> DELETE </a></button>
 </td>
    </tr>';
      }

    }

 ?>

   
  </tbody>
</table>
  </div>

  </section>

</body>
</html>