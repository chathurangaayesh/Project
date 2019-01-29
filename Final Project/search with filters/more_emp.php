<?php 
include ("connection.php");
session_start();
 ?>
 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>admin page</title>
	<style>


</style>
	
</head>
<body>

<div class="topnav">
	<div class="logo"><h2>Southern Province Engineering Services</h2>
  </div>
  <div class="nav-links">
  <a id="back"  href="#home"><i class="fa fa-arrow-left"></i></a>
  </div>

  
</div>
<div class="contact">
  <Div class="header"><h2>More Details</h2></Div>
  
	<div class="Emp_details">
   <div class="container">
  <div class="profile">
  <p>All Details about Emlpoyee <b> <?php echo $_SESSION['emp_name']; ?><img src="images/boss.png"></b></p>
  </div>            
  <table class="table table-condensed">


  	<?php 

		 $nic = $_GET['nic'];
 		$sql1="SELECT*FROM employee_personal_detail WHERE nic='$nic' ";
        		$result1=mysqli_query($conn,$sql1);
                // mysqli_num_rows($result1)
             	$result_set1=mysqli_fetch_assoc($result1);
         $sql2="SELECT*FROM employee_service_details WHERE nic='$nic' ";
         		$result2=mysqli_query($conn,$sql2);
                // mysqli_num_rows($result1)
             	$result_set2=mysqli_fetch_assoc($result2);

             	echo "<tr><th>Full name</th><td>".$result_set1['f_name']." ".$result_set1['l_name']."</td>";
             	echo "<th>nic Number</th><td>".$result_set1['nic']."</td></tr>";

             	echo "<tr><th>Telephone Number (Mobile)</th><td>".$result_set1['mobile']."</td>";
             	echo "<th>Telephone Number (Home)</th><td>".$result_set1['home']."</td></tr>";	
             	echo "<tr><th>Date Of Birth</th><td>".$result_set1['DOB']."</td>";
             	echo "<th>Address</th><td>".$result_set1['address']."</td></tr>";	
             	echo "<tr><th>Compulsary Retirement Date</th><td>".$result_set1['compulsary_retirement_date']."</td>";
             	echo "<th>Service Location</th><td>".$result_set2['service_location']."</td></tr>";

             	echo "<tr><th>designation</th><td>".$result_set2['designation']."</td>";
             	echo "<th>Current level</th><td>".$result_set2['level']."</td></tr>";
             	echo "<tr><th>Trainee Appointment Date</th><td>".$result_set2['trainee_appointment_date']."</td>";
             	echo "<th>Permenant Date</th><td>".$result_set2['permenant_date']."</td></tr>";
             	echo "<tr><th>level 1 Promotion Date</th><td>".$result_set2['level1_promotion_date']."</td>";
             	echo "<th>level 2 Promotion Date</th><td>".$result_set2['level2_promotion_date']."</td></tr>";
             	echo "<tr><th>level 3 Promotion Date</th><td>".$result_set2['level3_promotion_date']."</td>";
             	echo "<th>WOP Number</th><td>".$result_set2['wop']."</td></tr>";

 ?>
 
  </table>
</div>
	</div>
  
</div>
<div class="footer">
  <p> CS2018g12 @University of Ruhuna</p>
</div>
</body>
</html>