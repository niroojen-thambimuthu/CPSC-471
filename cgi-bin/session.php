
<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login'];
  // $_SESSION['Luser_id'] = $user_id;
  
   $ses_sql = mysqli_query($db,"select username from landlord where username = '$user_check' ");
 //   $ses_sql = mysqli_query($db,"select Luser_id from landlord where Luser_id  = '$user_id' ");
   
   if (!$ses_sql) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
//   $login_session = $row['Luser_id'];
 //  echo $username;
   if(!empty($_SESSION['login'])){
//      header("location:welcome.php");
   }
   
//   if (isset($_POST['reg_user'])) {
//	// receive all input values from the form
//	$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
//	$email = mysqli_real_escape_string($db, $_POST['email']);
//	$username = mysqli_real_escape_string($db, $_POST['username']);
//	$password = mysqli_real_escape_string($db, $_POST['password']);
 //       $contact = mysqli_real_escape_string($db, $_POST['contact']);
        
	// form validation: ensure that the form is correctly filled
//	if (empty($fullname)) { array_push($errors, "Fullname is required"); }
//	if (empty($email)) { array_push($errors, "Email is required"); }
//	if (empty($username)) { array_push($errors, "Username is required"); }
  //      if (empty($password)) { array_push($errors, "Password is required"); }
    //    if (empty($contact)) { array_push($errors, "ContactNo is required"); }


	// register user if there are no errors in the form
	//if (count($errors) == 0) {
	//	$query = "INSERT INTO `users` (`username`, `password`, `contact`, `fullname`) VALUES('".$username."','".$password."','".$contact."','".$fullname."')"; 
	// //			  VALUES('$username', '$email', '$password')";
	//	mysqli_query($db, $query);
          //      echo "done";
	//	$_SESSION['username'] = $username;
	//	$_SESSION['success'] = "You are now logged in";
	//	header('location: welcome.php');
	//}

//}
 //  }

   
?>