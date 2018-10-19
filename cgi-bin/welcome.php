<?php
   include("config.php");
   include("session.php");
   
   session_start();
if(isset($_SESSION['username'])) {
  echo "Welcome " . $_SESSION['username'];
}
?>
<html">
 <!--  
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   -->
</html>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<body>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<!-- Navigation -->
<nav class="w3-bar w3-black">
  <a href="#home" class="w3-button w3-bar-item"button onClick="document.location.href = 'welcome.php'">Home</a>
  <a href="#band" class="w3-button w3-bar-item"button onClick="document.location.href = 'listing.php'">Listing</a>
  <a href="#tour" class="w3-button w3-bar-item"button onClick="document.location.href = 'profile.php'">Profile</a>
<!--  <a href="#contact" class="w3-button w3-bar-item">Register</a>-->
  <a href="#search" class="w3-button w3-bar-item">Search</a>
  <a href="#Login" class="w3-button w3-bar-item"button onClick="document.location.href = 'logout.php'">Logout</a>
      </nav>

<img src="home.jpg" alt="Home" width="500" height="377">

<!--Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">Rental Housing</h2>
  <p class="w3-justify">Find your next housing or whatever you're looking for here!</p>
</section>
