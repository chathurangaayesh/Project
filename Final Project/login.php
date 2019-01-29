<?php
	include ("connection.php");
session_start();
	if(isset($_POST["login-button"]))
	{
		$nic=mysqli_real_escape_string($conn,$_POST["userid"]);
		 $password=mysqli_real_escape_string($conn,$_POST["password"]);

		$hashed_password=md5($password);
		
		$sql="SELECT*FROM administration WHERE 	NIC='$nic' AND hasedPassword='$hashed_password'";
		$result=mysqli_query($conn,$sql);
		$result_set=mysqli_fetch_assoc($result);
		// mysqli_num_rows($result);
	echo 	$_SESSION['username']=$result_set['username'];
		$_SESSION['NIC']=$result_set['NIC'];
		if(mysqli_num_rows($result)==1)
		{

			if($result_set['role']=="admin")
			{ 
				header("location:Cheef Eng/admin_page.php");

			}
			elseif ($result_set['role']=="clerk"){
				header("location:Clerk Page/Clerk_page.php");
			}
		}
		else {
			//header("location:Login_page.php?error=1");
		}
		
		
	}
		
?>
