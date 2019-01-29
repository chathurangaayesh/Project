<?php 
 $usernic=$_POST['nic'];
  include("connection.php");
  if (isset($_POST['UpdatePW'])) {
       $newpassword=mysqli_real_escape_string($conn,$_POST["newpassword"]);
       $confirmnewpassword=$_POST["confirmnewpassword"];
       $hasedpassword=md5($newpassword);
    if($newpassword==$confirmnewpassword)
    {
        $usernic=$_POST['nic'];
        $sql="UPDATE administration SET password='$newpassword',hasedPassword='$hasedpassword' WHERE nic='$usernic'";
        $result=mysqli_query($conn,$sql);
        if( $result){
          header('location:../Edit clerk.php');
        }
    }
    else {
          echo "<script type='text/javascript'>alert('submition Failed!  Password Not match Try again')</script>";
        }

  }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Edit Password</title>
	<style>


</style>
	
</head>
<body>

<div class="topnav">
	<div class="logo"><h2>Southern Province Engineering Services</h2>
  </div>
  <div class="nav-links">
  <a id="back"  href="../Edit clerk.php"><i class="fa fa-arrow-left"></i></a>
  </div>

</div>
<div class="contact">
  
  
	<div class="edit-form">
    <Div class="header"><h2>Change Password</h2></Div>
   <form method="POST" action="Edit clerk password.php">
    <table>
    <tr>
   <td>Check Your UserName</td>
    <td><input type="text" size="10" name="nic" value="<?php echo $usernic ?>" readonly></td>
    </tr>
    <tr>
    <td>Enter your existing password:</td>
    <td><input type="text" size="10" name="password" value="<?php echo  $_POST['password']    ?>" readonly></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password" name="UpdatePW"></p>
    </form>
   
	</div>
  
</div>
<div class="footer">
  <p> CS2018g12 @University of Ruhuna</p>
</div>
</body>
</html>