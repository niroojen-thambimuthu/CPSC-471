<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<div class="container">
<form>
    
  <legend>Registration for Renter</legend>
  <form method ="post" action="registeration.php">
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
      Age<input type="number" name="age" value="<?php echo $age ?>"><Br>
      Gender<input type="text" name="gender" value="<?php echo $gender ?>"><Br>
      Relationship Status<input type="text" name="relationship" value="<?php echo $relationship ?>"><Br>
      Background Check<input type="text" name="background" value="<?php echo $background ?>"><Br>
      Credit Report<input type="text" name="gender" value="<?php echo $credit ?>"><Br>
    
      <input type = "submit" name ="submit" value = " Submit "/><br />



<?php 
//include('session.php');
session_start();
include('config.php');
//if (isset($_POST["submit"])) {
$fullname = mysqli_real_escape_string($db, $_REQUEST['fullname']); 
$username = mysqli_real_escape_string($db, $_REQUEST['username']);
$password = mysqli_real_escape_string($db, $_REQUEST['password']);
$contact = mysqli_real_escape_string($db, $_REQUEST['contact']);
$age = mysqli_real_escape_string($db, $_REQUEST['age']);
$gender = mysqli_real_escape_string($db, $_REQUEST['gender']);
$relationship = mysqli_real_escape_string($db, $_REQUEST['relationship']);
$background = mysqli_real_escape_string($db, $_REQUEST['background']);
$credit = mysqli_real_escape_string($db, $_REQUEST['credit']);
// if (isset($_POST["submit"])) {// && isset($_POST['$username']) && isset($_POST['$password']) && isset($_POST['$fullname']) && isset($_POST['$contact'])) {
$sql = "INSERT INTO user (username, password, contact, fullname) VALUES ('$username', '$password', '$contact', '$fullname')";
$sql1 = "INSERT INTO renter (fullname, username, password, contact, age, gender, relationship, background, credit) VALUES ('$fullname', '$username', '$password', '$contact', '$age', '$gender', '$relationship', '$background', '$credit')";
//mysqli_query($db, $sq1);
//header("Location:welcome.php");
if(mysqli_query($db, $sql) && (mysqli_query($db, $sql1))) {
 //   echo "NEW record";
 //   if(contact > 11)
   // {
    if($contact > 1) {
    header("Location:welcome.php");
    }
    //}
 //   $result = mysqli_query(db, $sq1);
//header("location: welcome.php");
  //  if (isset($_POST['username']) && isset($_POST['password'])) {
   //    header("Location:welcome.php"); 
    //}
mysqli_close($db);
}
?>