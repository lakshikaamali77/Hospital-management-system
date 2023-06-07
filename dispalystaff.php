<?php 
include 'connect.php';

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staff Scheduling</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  <style type="text/css">
        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      background: url('./infostaff.jpg');
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



   <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> DELETE DATA </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete.php" method="post">

                    <div class="modal-body">

                        <input type="hidden" name="deleteid" id="deleteid">

                        <h4> DO YOU WANT DELETE THIS??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deleteid" class="btn btn-danger"> Yes !! DELETE IT. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    

  

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








    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#scheduleid').val(data[0]);

            });
        });
    </script>

</body>
</html>