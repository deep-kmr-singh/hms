<?php
$fname = $_POST['fname'];
$enum = $_POST['enum'];
$snumber = $_POST['snumber'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];



$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "meet";

//create connection 
$conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbname,"3306");

$sql="INSERT INTO feedback (fname,enum,snumber,email,feedback) values('$fname',$enum,$snumber,'$email','$feedback')";
mysqli_query($conn,$sql);

 ?>
