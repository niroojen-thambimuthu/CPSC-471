<?php
   session_start();
   
   if(session_destroy()) {
      echo "Logged Out!";
   }
?>
<Br><input type="button" value="Home"button onClick="document.location.href = 'home.php'"><Br>