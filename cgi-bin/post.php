<?php
//include("config.php");
// include("session.php");
session_start();
if(isset($_SESSION['username'])) {
  echo "Your session is running " . $_SESSION['username'];
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">  
Home/Apartment/Others?<input type="button" value="Residential" button onClick="document.location.href = 'residential.php'"</input><Br>
Office space?<input type="button" value="Office" button onClick="document.location.href='office.php'"</input>