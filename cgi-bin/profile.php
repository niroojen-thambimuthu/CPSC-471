<?php
//include("config.php");
// include("session.php");
session_start();
if(isset($_SESSION['username'])) {
  echo "Your session is running " . $_SESSION['username'];
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">  
<input type="button" value="Post" button onClick="document.location.href = 'post.php'"</input> 
  <input type="button" value="Edit" button onClick="document.location.href='view.php'"</input>
