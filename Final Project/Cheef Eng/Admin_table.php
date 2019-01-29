<?php
	include("connection.php");
	
	$sql="CREATE TABLE admin (NIC VARCHAR(10) PRIMARY KEY NOT NULL,Username varchar(20) NOT NULL, password varchar(15) NOT NULL, role varchar(8) NOT NULL);";
	
	$table=mysqli_query($conn,$sql);
		
	if($table)
		echo "Table creation successful";
	else
		echo "Unsuccessful";
?>