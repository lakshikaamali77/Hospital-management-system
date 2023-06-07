<?php 
include 'connect.php';

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Patient Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <style type="text/css">
        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      background: url('./patiba.jpg');
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
		<button class="btn btn-primary my-5"> <a href="patireg.php" class="text-light">ADD USER</a></button>  

		<br>
		<center><h1>Patient Registration Information </h1></center>
		<br>

		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Patient ID</th>
      <th scope="col">Doctor ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col"> Oparations</th>
    </tr>
  </thead>
  <tbody>  

  	<?php 
  	$sql = "SELECT * FROM `patientreg`";
  	$result=mysqli_query($con,$sql);
  	if ($result) {
  		while ($row=mysqli_fetch_assoc($result)) {
  			    $id = $row ['id'];
  			    $patientid = $row['patientid'];
            $doctorid = $row['doctorid'];
            $Name = $row['name'];
            $age = $row['age'];
            $phone = $row['number'];
            $city = $row['city'];
            $email = $row['email'];
            $gender = $row['gender'];
            echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$patientid.'</td>
      <td>'.$doctorid.'</td>
      <td>'.$Name.'</td>
      <td>'.$age.'</td>
      <td>'.$phone.'</td>
      <td>'.$city.'</td>
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

</body>
</html>