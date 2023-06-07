<?php 
include 'connect.php';

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> An Appoiment </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      background: url('./appoinf.jpg');
      background-size: cover;
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
  </style>
	
</head>
<body>

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

</body>
</html>