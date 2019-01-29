<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>login area</title>
  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="shortcut icon" type="image/png" href="img/Emblem_of_Sri_Lanka.svg.png">
      <link rel="stylesheet" href="css/index_styles.css">

  
</head>

<body style='background-image:url("img/galle3.jpg");'>

  
<div class='container'  >
  <div class='container_inner'  >
  
      <div class='login'>
        <div class='login_profile'>
          <img class='logo' src='img/Engineering Services logo.jpg'>

          
        </div>
        <div class='login_desc'>
          <h3>
            Southern Engineering Services
            <span>Galle</span>
          </h3>
        </div>
        <div class='login_inputs'>
          <form action="login.php" method="POST">
           
            <div class='error'>
            
              <?php
             
if(isset($_GET['error'])){
    echo "<div class='alert alert-danger'>";
   if($_GET['error']==1){
    echo" Username or Password is incorrect please Check again";
    }
    echo "</div>";
}

?>

            </div>
             <input placeholder='User ID' required='required' type='text' name="userid">
            <input placeholder='Your password' required='required' type='password' name="password">
            <input type='submit' name="login-button" value='Log in'>
          </form>
          
          <div class='forgotten'>
            <a href='#'>Forgotten your password?</a>
          </div>
    
        </div>
      </div>
     
    </div>
  
</div>
  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  

    <script  src="js/index.js"></script>
 -->



</body>

</html>
