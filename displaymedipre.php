<?php 
include 'connect.php';

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Medical Prescription </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <style type="text/css">
        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      background: url('./bamedi.jpg');
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
		<button class="btn btn-primary my-5"> <a href="medicalpre.php" class="text-light">ADD USER</a></button>  

		<br>
		<center><h1> Medical Prescriptions Information </h1></center>
		<br>

		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Prescription ID </th>
      <th scope="col">Weight</th>
      <th scope="col">Height</th>
      <th scope="col">Blood Sugar</th>
      <th scope="col"> Blood Presure</th>
      <th scope="col"> Medical Prescription</th>
      <th scope="col">Date</th>
      <th scope="col">Gender</th>
      <th scope="col"> Oparations</th>
    </tr>
  </thead>
  <tbody>  

  	<?php 
  	$sql = "SELECT * FROM `medicalpresption`";
  	$result=mysqli_query($con,$sql);
  	if ($result) {
  		while ($row=mysqli_fetch_assoc($result)) {
            $id = $row ['id'];
  			    $patientid = $row['patientid'];
            $weight = $row['weight'];
            $height = $row['height'];
            $bloodsugar = $row['bloodsugar'];
            $bloodpresure = $row['bloodpresure'];
            $medicalpres = $row['medicalpres'];
            $date = $row['date'];
            $gender = $row['gender'];
            echo ' <tr>
      <td>'.$id.'</td>    
      <td>'.$patientid .'</td>
      <td>'.$weight.'</td>
      <td>'.$height.'</td>
      <td>'.$bloodsugar.'</td>
      <td>'.$bloodpresure.'</td>
      <td>'.$medicalpres.'</td>
      <td>'.$date.'</td>
      <td>'.$gender.'</td>
      <td>
 	<button class="btn btn-success">UPDATE </a></button>
 	<button class="btn btn-danger"> DELETE </a></button>
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