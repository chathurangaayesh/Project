 <?php 
include("connection.php");
 // ==Add clerk Form Submition========================================= 
  if(isset($_POST["addclerkSubmit"]))
  {


    $ClerkFName=mysqli_real_escape_string($conn,$_POST["Fname"]);
    $ClerkUName=mysqli_real_escape_string($conn,$_POST["nic"]);
    $ClerkPassword=mysqli_real_escape_string($conn,$_POST["psw"]);
    $hasedPassword=md5($ClerkPassword); 

     
    
     $sql="INSERT INTO administration values('$ClerkUName', '$ClerkFName','$hasedPassword','$ClerkPassword','clerk')";
    
     $result=mysqli_query($conn, $sql);
        if($result){
            echo "<script type='text/javascript'>alert('New clark added successfully!')</script>";
         }
        else
          {
            echo "<script type='text/javascript'>alert('submition Failed! Allredy Added')</script>";
          } 

  }

// ==Delete_button======================================
  if (isset($_POST['Delete_btn'])) {
    
    $Clerknic=mysqli_real_escape_string($conn,$_POST["nic"]);
    $sql_nic="SELECT nic FROM administration WHERE role='clerk' ";
    $count_set=mysqli_query($conn, $sql_nic);
    if(mysqli_num_rows($count_set)>1){

        $sql2="DELETE FROM administration WHERE nic='$Clerknic' ";
        $result2=mysqli_query($conn, $sql2);
      }else{
          echo "<script type='text/javascript'>alert('You cant delete! This is the last clerk in the list')</script>";
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
	<title>admin page</title>
	<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function DeleteConform() {
    alert('Are You Suer\nYou Want to Delete Clark?');
}

</script>
	
</head>
<body>

<div class="topnav">
	<div class="logo"><h2>Southern Province Engineering Services</h2>
  </div>
  <div class="nav-links">
  <a id="back"  href="../Cheef Eng/admin_page.php"><i class="fa fa-arrow-left"></i></a>

 
  </div>

</div>
<div class="contact">
  
  
	<div class="Emp-table">
    <Div class="Add_Clark">
      
      <button class="open-button" onclick="openForm()" >Add Form</button>
        <h4>Add a New clerk</h4>
    
    <div class="form-popup" id="myForm">
        <form action="Edit clerk.php" class="form-container" method="POST">
            <h1>Register Form</h1>

            <label ><b>Name</b></label>
            <input type="text" placeholder="Ful Name" name="Fname" required>

            <label ><b>User name</b></label>
            <input type="text" placeholder="Enter nic Number" name="nic" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <input type="submit"  name="addclerkSubmit" class="btn" value="Add New Clerk" align="center"/>
            <input type="button" value="Close" class="btn cancel" onclick="closeForm()"/>
        </form>
      </div>
      </Div>

  <!-- Table Edit clerk -------------------------------------- --> 
  <div class="edit_clerk">
    <h2>Edit Clerk</h2>
	   <table class=" table table-striped">
    <thead >
      <tr>
        <th>nic</th>
        <th>User Name</th>
        <th>Edit</th>
        <th>Modify Password</th>

      </tr>
    </thead>
    <tbody>
      
          <?php 
          $sql1="SELECT*FROM administration WHERE role='clerk'  " ;
          $result1=mysqli_query($conn, $sql1);
          
          while ($result1_set=mysqli_fetch_assoc($result1)) {
          echo "<tr>"; 
          echo "<td>".$result1_set['nic']."</td>"; 
          echo "<td>".$result1_set['username']."</td>"; 
          
          echo "<td><form action='Edit clerk/Edit clerk password.php' method='POST'>
          <input type='hidden' name='nic'  value='".$result1_set['nic']."'/>
           <input type='hidden' name='password'  value='".$result1_set['password']."'/>
          <input type='submit'  name='edit_btn'$ class='btn_edit' value='Edit'/></form></td>";

          echo "<td><form action='Edit clerk.php' method='POST'>
           <input type='hidden' name='nic'   value='".$result1_set['nic']."'/>
           <input  type='submit'  name='Delete_btn' class='btn_delet' value='Delete' onclick='DeleteConform()'/></form></td>";
          echo "</tr>";   
          }
       
          

           ?>
     
    </tbody>
  </table>
</div>
	</div>

</div>
<div class="footer">
  <p> CS2018g12 @University of Ruhuna</p>
</div>
</body>
</html>