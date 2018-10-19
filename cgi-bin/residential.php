<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<div class="container">
<form>
    
  <legend>Add Residential Listing</legend>
    Property Type<input type="text" name="Property_type" value="<?php echo $Property_type ?>"><Br>
    Ad-Title<input type="text" name="Ad_title" value="<?php echo $Ad_title ?>"><Br>
    Price<input type="number" step="any" name="Price" value="<?php echo $Price ?>"><Br>
    Availibility<input type="text" name="Availibility" value="<?php echo $Availibility ?>"><Br>
    Description<input type="text" name="Description" value="<?php echo $Description ?>"><Br>
    Unit NO<input type="text" name="Unit_no" value="<?php echo $Unit_no ?>"><Br>
    Street<input type="text" name="street" value="<?php echo $street ?>"><Br>
    City<input type="text" name="city" value="<?php echo $city ?>"><Br>
    Postal Code<input type="text" name="Postalcode" value="<?php echo $Postalcode ?>"><Br>
    Legal Documentation<input type="text" name="Legal_documentation" value="<?php echo $Legal_Documentation ?>"><Br>
    Contract<input type="text" name="Contract" value="<?php echo $Contract ?>"><Br>
    Unit Type<input type="text" name="Unit_type" value="<?php echo $Unit_type ?>"><Br>
    Bedrooms<input type="number" name="Bedrooms" value="<?php echo $Bedrooms ?>"><Br>
    Bathrooms<input type="number" name="Baths" value="<?php echo $Bathrooms ?>"><Br>
    Under 18 Y/N<input type="text" name="Under_18" value="<?php echo $Under_18 ?>"><Br>
    Parking<input type="number" name="Parking" value="<?php echo $Parking ?>"><Br>
    Size<input type="text" name="Size" value="<?php echo $Size ?>"><Br>
    
      <input type = "submit" name ="submit" value = " Submit "/><br />
<?php 
include('config.php');
session_start();
$Property_type = mysqli_real_escape_string($db, $_REQUEST['Property_type']); 
$Ad_title = mysqli_real_escape_string($db, $_REQUEST['Ad_title']);
$Price = mysqli_real_escape_string($db, $_REQUEST['Price']);
$Availibility = mysqli_real_escape_string($db, $_REQUEST['Availibility']);
$Description = mysqli_real_escape_string($db, $_REQUEST['Description']);
$Unit_no = mysqli_real_escape_string($db, $_REQUEST['Unit_no']);
$street = mysqli_real_escape_string($db, $_REQUEST['street']);
$city = mysqli_real_escape_string($db, $_REQUEST['city']);
$Postalcode = mysqli_real_escape_string($db, $_REQUEST['Postalcode']);
$Legal_documentation = mysqli_real_escape_string($db, $_REQUEST['Legal_documentation']);
$Contract = mysqli_real_escape_string($db, $_REQUEST['Contract']);
$Unit_type = mysqli_real_escape_string($db, $_REQUEST['Unit_type']);
$Bedroom = mysqli_real_escape_string($db, $_REQUEST['Bedroom']);
$Baths = mysqli_real_escape_string($db, $_REQUEST['Baths']);
$Under_18 = mysqli_real_escape_string($db, $_REQUEST['Under_18']);
$Parking = mysqli_real_escape_string($db, $_REQUEST['Parking']);
$Size = mysqli_real_escape_string($db, $_REQUEST['Size']);
// if (isset($_POST["submit"])) {// && isset($_POST['$username']) && isset($_POST['$password']) && isset($_POST['$fullname']) && isset($_POST['$contact'])) {
//$sql = mysql_query("INSERT INTO listing (Luser_id, Property_type, Ad_title, Price, Availibility, Description, Unit_no, street, city, Postalcode, Legal_documentation) VALUES('{$_SESSION['Luser_id']}', '', '', '', '', '', '', '', '', '', '')");
//$result = mysql_query("select username from landlord where Luser_id ='".$_SESSION['Luser_id']."'");
//if($result)
 //   echo "here";
// echo LAST_INSERT_ID();
// $sql = "select landlord.Luser_id from landlord where Luser_id = $Luser_id";
// echo $Luser_id;
//$sql = "INSERT INTO listing (Luser_id ,Property_type, Ad_title, Price, Availibility, Description, Unit_no, street, city, Postalcode, Legal_documentation) VALUES ('LAST_INSERT_ID()', '$Property_type', '$Ad_title', '$Price', '$Availbility', '$Description', '$Unit_no', '$street', '$city', '$Postalcode', '$Legal_documentation')";
//$sql1 = "INSERT INTO renter (fullname, username, password, contact, age, gender, relationship, background, credit) VALUES ('$fullname', '$username', '$password', '$contact', '$age', '$gender', '$relationship', '$background', '$credit')";
//mysqli_query($db, $sq1);
//header("Location:welcome.php");
//if(mysqli_query($db, $sql)) {// && (mysqli_query($db, $sql1))) {
 //   echo "NEW record";
 //   if(contact > 11)
   // {
    if($price > 1) {
    header("Location:welcome.php");
    }
    else
    {
        echo "Error filling in fields";
    }
    //}
 //   $result = mysqli_query(db, $sq1);
//header("location: welcome.php");
  //  if (isset($_POST['username']) && isset($_POST['password'])) {
   //    header("Location:welcome.php"); 
    //}
mysqli_close($db);
//}
?>