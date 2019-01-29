<?php
	include("connection.php");
	
	if(isset($_POST["addEmpSubmit"]))
	{
		$empFName=mysqli_real_escape_string($conn,$_POST["empFName"]);
		$empLName=mysqli_real_escape_string($conn,$_POST["empLName"]);
		$empID=mysqli_real_escape_string($conn,$_POST["empID"]);
		$empMC=mysqli_real_escape_string($conn,$_POST["empMC"]);
		$empHC=mysqli_real_escape_string($conn,$_POST["empHC"]);
		$EmpDOB=$_POST["empDOB"];
		$empTrAppDate= $_POST["empTrAppDate"];
		$empAppDate=$_POST["empAppDate"];
		$empWOP=mysqli_real_escape_string($conn,$_POST["empWOP"]);
		$empDes=mysqli_real_escape_string($conn,$_POST["empDes"]);
		$empLoc=mysqli_real_escape_string($conn,$_POST["empLoc"]);
		$empLevel=$_POST["empLevel"]; 
		$empAdd=mysqli_real_escape_string($conn,$_POST["empAdd"]);
		 
		

		 
		
		$sql="INSERT INTO employee_personal_detail values('$empFName', '$empLName', '$empID', '$empMC', '$empHC', '$EmpDOB', '$empAdd', DATE_ADD('$EmpDOB', INTERVAL 60 YEAR))";
		$sql2="INSERT INTO employee_service_details (nic, designation, level, trainee_appointment_date, permenant_date, wop, service_location) values('$empID', '$empDes', '$empLevel', '$empTrAppDate', '$empAppDate', '$empWOP', '$empLoc')";
		$result=mysqli_query($conn, $sql);
		$result2=mysqli_query($conn, $sql2);
		
		if($result && $result2)
		{
			echo "Successfull";
			$sql3="CREATE TABLE $empID (l_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, letter BLOB, l_type varchar(30), l_date date , l_remarks varchar(200))";
			$result3=mysqli_query($conn, $sql3);

			if($result3)
					echo "Successfull";
			else
					echo ("No ". mysqli_error($conn));
		}
		else 
			echo ("No ". mysqli_error($conn));
		

	}	
		
?>