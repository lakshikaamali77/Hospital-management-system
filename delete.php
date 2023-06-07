<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'hms');

if(isset($_POST['deletedata']))
{
    $id = $_POST['schduleid'];

    $query = "DELETE FROM newstaff WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:dispalystaff.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>