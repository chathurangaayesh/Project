<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>admin page</title>
	<style>


</style>
	
</head>
<body>

<div class="topnav">
	<div class="logo"><a href="admin_page.html"><h2>Southern Province Engineering Services</h2></a>
  </div>
  <div class="nav-links">
  <a id="back"  href="#home"><i class="fa fa-arrow-left"></i></a>

  <!-- <a class="active" href="#news">News</a>
  <a href="#contact">Contact</a>
  <a  href="#about">About</a> -->
  </div>

  <div class="logout">
   		<a id="logout"  href="#home">log Out</i></a>
    </div>	

</div>
 <div class="log_user" >
 	<p>Welcome</p>
  	<?php echo  $_SESSION['username'];
  
   ?>
   </div>
<div class="contact">
	<div class="select">
	<ul id="navlist">

 		<li id="li"><a href="../search with filters/Search.html"><img src="icon/search.png">Search</a></li>
 		<li id="li"><img src="icon/add.png">
 			<div class="dropdown">
  				<button class="dropbtn">Add Employee <i class="fa fa-caret-down"></i></button>
 				 <div class="dropdown-content">
    					<a href="../add_employee/addEmpForm.html">New Employee</a>
    					<a href="../Edit Employee/Edit employee.php">Edit </a>
    
				</div>
 		</li>
 		
 		 <li id="li"><a href="../Add Letters/Add letters.php"><img src="icon/latter.png">Add Latter</a></li>
 		 <li id="li"><a href="css_syntax.asp"><img src="icon/notise.png">Notices</a></li>
	</ul>
	</div>
  
</div>
<div class="footer">
	<p>University of Ruhuna</p>
</div>
</body>
</html>