<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<div class="container">
<form>
    
  <legend>Registration for Landlord</legend>
  <form method ="post" action="">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
  <div class="form-group">
    <label for="Full Name">Full Name</label>
      <input type="text" class="form-control" name="fullname"value="<?php echo $fullname ?>">
  </div>
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" value="<?php echo $username ?>">
  </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" value="<?php echo $password ?>">
  </div>
  <div class="form-group">
    <label for="contactnumber">Contact NO</label>
    <input type="number" name="contact" class="form-control" value="<?php echo $contact ?>">
  </div> 
  <div class="form-group">
      Legal Documents<input type="text" name="legal" value="<?php echo $legal ?>">
      <input type = "submit" name ="submit" value = " Submit "/><br />



<?php 
//include('session.php');
session_start();
include('config.php');
//if (isset($_POST["$contact > 1"])) {
$fullname = mysqli_real_escape_string($db, $_REQUEST['fullname']); 
$username = mysqli_real_escape_string($db, $_REQUEST['username']);
$password = mysqli_real_escape_string($db, $_REQUEST['password']);
$contact = mysqli_real_escape_string($db, $_REQUEST['contact']);
$legal = mysqli_real_escape_string($db, $_REQUEST['legal']);
$sql = "INSERT INTO user (username, password, contact, fullname) VALUES ('$username', '$password', '$contact', '$fullname')";
$sql1 = "INSERT INTO landlord (username, fullname, password, contact, legal) VALUES ('$username', '$fullname', '$password', '$contact', '$legal')";
//mysqli_query($db, $sq1);
//header("Location:welcome.php");
if(mysqli_query($db, $sql) && (mysqli_query($db, $sql1))) {
 //   echo "NEW record";
 //   if(contact > 11)
   // {
    if($fullname > "" && $username > "" && $password > "" && contact > 1)
    header("Location:welcome.php");
    
    else
    {
        echo "Error need to fill";
    }
    //}
 //   $result = mysqli_query(db, $sq1);
//header("location: welcome.php");
  //  if (isset($_POST['username']) && isset($_POST['password'])) {
   //    header("Location:welcome.php"); 
    //}
mysqli_close($db);
}
Errors
?>