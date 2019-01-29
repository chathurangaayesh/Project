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

  <!-- <a class="active" href="#news">News</a>
  <a href="#contact">Contact</a>
  <a  href="#about">About</a> -->
  </div>

  <!-- <div class="logout">
   		<a id="logout"  href="#home">log Out</i></a>
    </div>	 -->

</div>
<div class="contact">
  <Div class="header"><h2>Add Letters</h2></Div>
  <div class="search">
   
  </div>
	<div class="Add-letter-form">
    <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
	</div>
  
</div>
<div class="footer">
  <p> CS2018g12 @University of Ruhuna</p>
</div>
</body>
</html>