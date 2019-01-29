<?php 
include("connection.php");
	
	if(isset($_POST["addclerkSubmit"]))
	{


		$ClerkFName=mysqli_real_escape_string($conn,$_POST["Fname"]);
		$ClerkUName=mysqli_real_escape_string($conn,$_POST["NIC"]);
		$ClerkPassword=mysqli_real_escape_string($conn,$_POST["psw"]);
		$hasedPassword=md5($ClerkPassword);	

		 
		
		 $sql="INSERT INTO administration values('$ClerkUName', '$ClerkFName','$hasedPassword','clerk')";
		
		 $result=mysqli_query($conn, $sql);
		if($result){
			header("location:Edit clerk.php");
		}
	}
 ?>