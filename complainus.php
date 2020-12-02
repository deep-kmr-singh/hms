<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hostel Management System</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800"
      rel="stylesheet"
    />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="form.css" rel="stylesheet" type="text/css" media="all" />

    <!--[if IE 6
      ]><link href="default_ie6.css" rel="stylesheet" type="text/css"
    /><![endif]-->
  </head>
  <body>
    <div id="header-wrapper">
      <div id="header" class="container">
        <div id="logo"></div>
        <div id="menu">
          <ul>
            <li >
              <a href="index.html"  accesskey="1" title="">Home</a>
            </li>
            <li><a href="admission.php" accesskey="2" title="">Admission</a></li>
            <li><a href="inquiry.php" accesskey="3" title="">inquiry</a></li>
            <li class="current_page_item"><a href="complainus.php" accesskey="4" title="">Complain</a></li>
            <li><a href="feedback.html" accesskey="5" title="">Feedback</a></li>
            <li><a href="aboutus.html" accesskey="6" title="">About Us</a></li>
            <li><a href="contact.html" accesskey="7" title="">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <form action="#" method="POST"> 

    <h1 style="text-align: center; color:antiquewhite;">COMPLAIN</h1>
      <table border="2px solid black;">
        <tr>
          <td><label><b>Full Name</b></label></td>
          <td><input name="fname" type="text" placeholder="Enter your Name.." required></td>
        </tr>
        <tr>
          <td><label><b>Enrollment Number</b></label></td>
          <td><input name="enum" type="text" placeholder="Enter Your Number" required></td>
        </tr>
        <tr>
          <td><label><b>Student's Mobile No.</b></label></td>
          <td><input name="snumber" type="text" placeholder="Enter your Mobile No.." required></td>
        </tr>
        <tr>
          <td><label><b>Email ID</b></label></td>
          <td><input name="email" type="email" placeholder="Enter Email ID" required></td>
        </tr>
        <tr>
          <td><label><b>Complain</b></label></td>
          <td><input name="complain" type="text" placeholder="Enter your complain" required></td>
        </tr>
      </table>
        <button name="submit" type="submit"><b>Submit</b></button><br>
    </form>
    <!-- <form id="fs-frm"  action="complain1.php" method="POST">
     <h1 style="color: cornsilk; text-align: center; size: 1.3em;">COMPLAIN HERE</h1>
      <ffieldset id="fs-frm-inputs">
        <label or="name" style="color: cornsilk;">Full Name</label>
        <input type="text" name="name" id="name" placeholder="First and Last" required="">
        <br>
        <br>
        <br>
        <label or="number" style="color: cornsilk;">Enrollment Number</label>
        <input type="text" name="number" id="number" placeholder="Please enter enroll num" required="">
        <br>
        <br>
        <br>
        <label for="email" style="color: cornsilk;">Email Address</label>
        <input type="email" name="email" id="email" placeholder="xxx@email.com" required="">
        <br>
        <br>
        <br>
        <label for="mobile" style="color: cornsilk; ">Mobile Number(*)</label>
        <input type="mobile" name="mobile" id="mobile" placeholder="">
        <br>
        <br>
        <br>
        <label for="complaint" style="color: cornsilk;">Complaint</label>
        <textarea rows="12" name="complaint" id="complaint" placeholder="Please enter your complian "  required=""></textarea>
        
        <br>
        <br>
        <br>
        <input type="submit" value="submit">
        <p style="color: red; ">* is optional</p>
      </fieldset>
      
    </form> -->

    <?php
if(isset($_REQUEST['submit'])){
$fname = $_POST['fname'];
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

$sql="INSERT INTO complain (fname,enum,smobile,email,complain) values('$fname','$enum','$snumber','$email','$complain')";
mysqli_query($conn,$sql);
}
 ?>
            
<div id="copyright" class="container">
  <p>
    &copy; Untitled. All rights reserved. | Photos by
    <a href="#">ADIT IT</a> | Design by
    <a href="#" rel="nofollow">ADIT IT</a>.
  </p>
</div>
