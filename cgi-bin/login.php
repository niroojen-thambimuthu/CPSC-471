<?php 
    include("config.php");
    session_start();
    
    if(isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']); 
      
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
//    $_SESSION['Luser_id'] = $userid;
      $sql = "SELECT id FROM user WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	if($count == 1) {	
         $_SESSION['login'] = $username;
        header("location: welcome.php");
      }else {
         echo  "Your Login Name or Password is invalid";
      }
    }
   // }
   
?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <legend>Login</legend>
<form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" name ="submit" value = " Submit "/><br>
</form>
