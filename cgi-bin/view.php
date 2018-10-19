<?php
// connect to your database
include ("config.php");
   session_start();
//if(isset($_SESSION['username'])) {
  //echo "Your session is running " . $_SESSION['username'];
//}
$result = mysqli_query($db,"SELECT * FROM listing");

echo "<table border='1'>
<tr>
<th>Ad-title</th>
<th>Property Type</th>
<th>Price</th>
<th>Availibility</th>
<th>Description</th>
<th>Unit NO</th>
<th>Street</th>
<th>City</th>
<th>Postal Code</th>
<th>Legal Documentation</th>
<th>Contract</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Ad_title'] . "</td>";
echo "<td>" . $row['Property_type'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "<td>" . $row['Availibility'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";
echo "<td>" . $row['Unit_no'] . "</td>";
echo "<td>" . $row['street'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['Postalcode'] . "</td>";
echo "<td>" . $row['Legal_documentation'] . "</td>";
echo "<td>" . $row['Contract'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>

Is this Correct?<input type="button" value="Continue" button onClick="document.location.href = 'welcome.php'"</input>
Do you want to redo?<input type="button" value="Edit" button onClick="document.location.href = 'post.php'"</input>