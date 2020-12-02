<?php
if(isset($_REQUEST['submit'])){
$name = $_POST['name'];
$enum = $_POST['enum'];
$snumber = $_POST['snumber'];
$email = $_POST['email'];
$complain = $_POST['complain'];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "meet";

//create connection 
$conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbname,"3306");

$sql="INSERT INTO complain (name,enum,smobile,email,complain) values('$name','$enum','$snumber','$email','$complain')";
mysqli_query($conn,$sql);
}
 ?>
                                           