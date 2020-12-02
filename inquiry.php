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
            <li><a href="admission.php" accesskey="2" title="">Admission</a></li>
			      <li class="current_page_item"><a href="inquiry.php" accesskey="3" title="">Inquiry</a></li>
            <li><a href="complainus.php" accesskey="4" title="">Complain</a></li>
            <li><a href="feedback.html" accesskey="5" title="">Feedback</a></li>
            <li><a href="aboutus.html" accesskey="6" title="">About Us</a></li>
            <li><a href="contact.html" accesskey="7" title="">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="wrapper" style="background-color:#48342e; margin-top:20px;">
		<button style="margin-left:400px;" onclick="document.getElementById('block1').style.visibility='visible'">STUDENT INQUIRY</button>
		<button style="margin-left:20px;" onclick="document.getElementById('block2').style.visibility='visible'" >GUEST INQUIRY</button> 
    </div>
	<div id="block1" style="visibility:hidden;">
	<div class="text-header">
	<h1 style="color:white;">Student Inquiry</h1>
	</div>
<center><br><br>
<h1>Inquiry Form</h1>
</center>
<div>
  <form action="/action_page.php">
  <table border="2px solid black;">
    <tr>
    <td><label for="dept">Department</label></td>
    <td><input type="text" id="dept" name="Department" placeholder="Department name"></td></tr>
    <tr>
      <td>
    <label for="catagory">Category</label></td><td>
    <select id="catagory" name="Category">
      <option value="OPEN">OPEN</option>
      <option value="OBC">OBC</option>
      <option value="SC">SC</option>
      <option value="ST">ST</option>
    </select></td></tr><tr>
      <td>
    <label for="Entoll/gujcet no"> Enrollment number/Gujcet Number</label></td>
    <td><input type="text" id="Enroll/gujcet no" name=" Enrollment/Gujcet Number" placeholder="Your Enrollment/Gujcet Number.."></td>
    </tr> <tr><td>
     <label for="merit/spi">Merit/SPI</label></td>
    <td><input type="text" id="merit/spi" name="Merit/SPI" placeholder="Your Merit/SPI"></td></tr>

     <tr><td>
    <label for="contact no"> Contact number</label></td><td>
    <input type="text" id="contact no" name="Contact number" placeholder="Your Coontact Number"></td></tr>
    <tr><td>
    <label for="email">Email</label></td><td>
    <input type="text" id="email" name="Email" placeholder="Your email"></td></tr>
    <tr><td>
    <label for="year">Year</label></td><td>
    <input type="date" id="Year" name="Year"></td></tr>


  
</table>
    <button name="submit" type="submit"><b>Submit</b> </button>
  </form>
</div>
<div id="block2" style="visibility:hidden;">
	<div class="text-header">
	<h1 style="color:white;">Guest Inquiry</h1>
	</div>
<center><br><br>
<h1>Inquiry Form</h1>
</center>
<div>
  <form action="/action_page.php">
  <table border="2px solid black;">
    <tr>
    <td><label for="dept">Full Name</label></td>
    <td><input type="text" id="name" name="name" placeholder="Full name"></td></tr>
    <tr>
      <td><label for="enum">Enrollment Number</label></td>
      <td><input type="text" id="enum" name="enum" placeholder="Enrollment Number"></td>
    </tr>
    <tr><td>
    <label for="contact no"> Contact Number</label></td><td>
    <input type="text" id="contact no" name="Contact number" placeholder="Your Contact Number"></td></tr>
    <tr><td>
    <label for="email">Email</label></td><td>
    <input type="text" id="email" name="Email" placeholder="Your email"></td></tr>
    <tr><td>
    <label for="GUE">NO OF GUESTS</label></td>

          <td>  <select id="GUE">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
            </select></td></tr>
            <tr><td>
    <label for="relation"> Relation</label></td><td>
    <input type="text" id="relation" name="relation" placeholder="Relation"></td></tr>
    

     
    <tr><td>
    <label for="email">Email</label></td><td>
    <input type="text" id="email" name="Email" placeholder="Your email"></td></tr>
    <tr><td>
    <label for="sf">Staying Form</label></td><td>
    <input type="date" id="sf" name="sf"></td></tr>
    <tr><td>
    <label for="st">Staying To</label></td><td>
    <input type="date" id="st" name="st"></td></tr>


  
</table>
    <button name="submit" type="submit"><b>Submit</b> </button>
  </form>
</div>
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



