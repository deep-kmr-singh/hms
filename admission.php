<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Goverment Engineering Hostel Patan
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130903

-->
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
            <li><a href="index.html" accesskey="1" title="">Home</a></li>
            <li class="current_page_item">
              <a href="admission.php" accesskey="2" title="">Admission</a>
			</li>
			<li><a href="inquiry.php" accesskey="3" title="">Inquiry</a></li>
            <li><a href="complainus.php" accesskey="4" title="">Complain</a></li>
            <li><a href="feedback.html" accesskey="5" title="">Feedback</a></li>
            <li><a href="aboutus.html" accesskey="6" title="">About Us</a></li>
            <li><a href="contact.html" accesskey="7" title="">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="wrapper" style="background-color:#48342e; margin-top:20px;">
		<button style="margin-left:400px;" onclick="document.getElementById('block1').style.visibility='visible'">Apply First Time for Hostel</button>
		<button>Previosly Staded in our Hostel</button> 
    </div>
	<div id="block1" style="visibility:hidden;">
	<div class="text-header">
	<h1 style="color:white;">Online Application for Hostel Admission</h1>
	</div>
	<form action="#" method="post"> 
	<table border="2px solid black;">
		<tr>
			<td><label><b>Full Name</b></label></td>
			<td><input name="name" type="text" placeholder="Enter your Name.." required></td>
		</tr>
		<tr>
			<td><label><b>Department</b></label></td>
			<td>
				<select name="department">
				<option  disabled="disabled" selected required>Select your Department..</option>
				<option value="Electrical Engineering">Electrical Engineering</option>
				<option value="Computer Science and Engineering">Computer Science and Engineering</option>
				<option value="Civil Engineering">Civil Engineering</option>
				<option value="Mechanical Engineering">Mechanical Engineering</option>
				<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label><b>For which year<br>you want to Apply?</b></label></td>
			<td>	
				<input id="first" name="year" type="radio" value="First" onclick="choice()" required> First
				<input id="second" name="year" type="radio" value="Second" onclick="choice()" required> Second
				<input id="third" name="year" type="radio" value="Third" onclick="choice()" required> Third
				<input id="fourth" name="year" type="radio" value="Fourth" onclick="choice()" required> Fourth
			</td>
		</tr>
		<tr id="firstChoice1" style="display:none;">
			<td><label><b>GUJCET / Enrollment No.</b></label></td>
			<td><input name="number" type="text" placeholder="Enter your Enrollment No.." required></td>
		</tr>
		<tr id="firstChoice2" style="display:none;">
			<td><label><b>Merit No. <br>or<br>Previous Semester SPI</b></label></td>
			<td><input name="merit" type="text" placeholder="Enter your Merit No or SPI.." required></td>
		</tr>
		<tr id="restChoice1" style="display:none;">
			<td><label><b>Enrollment No.</b></label></td>
			<td><input name="number" type="text" placeholder="Enter your Enrollment No.." required><br></td>
		</tr>
		<tr id="restChoice2" style="display:none;">
			<td><label><b>Previous Semester SPI</b></label></td>
			<td><input name="merit" type="text" placeholder="Enter your SPI.." required><br></td>
		</tr>
		<tr>
			<td><label><b>Category</b></label></td>
			<td>
				<select name="category"> 
				<option disabled="disabled" selected required>Select your Category..</option>
				<option value="OPEN">OPEN</option>
				<option value="SEBC">SEBC</option>
				<option value="SC">SC</option>
				<option value="ST">ST</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label><b>Student's Mobile No.</b></label></td>
			<td><input name="snumber" type="text" placeholder="Enter your Mobile No.." required></td>
		</tr>
		<tr>
			<td><label><b>Parent's Mobile No.</b></label></td>
			<td><input name="pnumber" type="text" placeholder="Enter your Parent's Mobile No.." required></td>
		</tr>
		<tr>
			<td><label><b>Email ID</b></label></td>
			<td><input name="email" type="email" placeholder="Enter Email ID" required></td>
		</tr>
		<tr>
			<td><label><b>Recent Address</b></label></td>
			<td><input name="raddress" type="text" placeholder="Enter Recent Address.." required></td>
		</tr>
		<tr>
			<td><label><b>Permanent Address</b></label></td>
			<td><input name="paddress" type="text" placeholder="Enter Permanent Address.." required></td>
		</tr>
	</table>
    <button name="submit" type="submit"><b>Submit</b></button><br>
</form>
<?php
	
	if(isset($_REQUEST['submit'])){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "hostel_db";
		$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
		$name = $_POST['name'];
		$department = $_POST['department'];
		$year = $_POST['year'];
		$number = $_POST['number'];
		$merit = $_POST['merit'];
		$category = $_POST['category'];
		$snumber = $_POST['snumber'];
		$pnumber = $_POST['pnumber'];
		$email = $_POST['email'];
		$raddress = $_POST['raddress'];
		$paddress = $_POST['paddress'];
		$sql = "INSERT INTO apply_tb (name,department,year,number,merit,category,snumber,pnumber,email,raddress,paddress) VALUES ('$name','$department','$year','$number',$merit,'$category','$snumber','$pnumber','$email','$raddress','$paddress')";
		mysqli_query($conn,$sql);
	}
?>
<script>
function choice() {
    if (document.getElementById('first').checked) {
        document.getElementById('firstChoice1').style.display = 'table-row';
		document.getElementById('firstChoice2').style.display = 'table-row';
		document.getElementById('restChoice1').style.display = 'none';
		document.getElementById('restChoice2').style.display = 'none';
    } 
	if (document.getElementById('second').checked || (document.getElementById('third').checked) || (document.getElementById('fourth').checked)){
        document.getElementById('restChoice1').style.display = 'table-row';
		document.getElementById('restChoice2').style.display = 'table-row';
		document.getElementById('firstChoice1').style.display = 'none';
		document.getElementById('firstChoice2').style.display = 'none';
    }
}	
</script>
    <br>
    <br>
    <div id="copyright" class="container">
		<p>
            &copy; Untitled. All rights reserved. | Photos by
            <a href="#">ADIT IT</a> | Design by
            <a href="#" rel="nofollow">ADIT IT</a>.
        </p>
    </div>
  </body>
</html>
