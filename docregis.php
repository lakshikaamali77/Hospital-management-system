<?php 

   if (isset($_POST['sumbit'])) {

     $doctorID = $_POST["doctorid"];
     $name = $_POST["name"];
     $specialization = $_POST["specialization"];
     $address = $_POST["address"];
     $doctorcharges = $_POST["doccharges"];
     $phone = $_POST["phone"];
     $email = $_POST["email"];
     $slmcregister = $_POST["slmcregister"];
     $date = $_POST["date"];
     $gender = $_POST["gender"];


$sql = "INSERT INTO doctor(doctorid,name,specialzation,address,doctorcharges,phone,email,slmcregister,date,gender)VALUES('$doctorid','$name','$specialzation', '$address','$doctorcharges','$phone','$email','$slmcregister','$date','$gender')";
if(mysql_query($conn,$sql)){
    echo '<script>alert("All saved")</script>';
}
else{
    echo '<script>alert("Failed")</script>';
}

}


 ?>