<?php
// connect to your database
include ("config.php");
   session_start();
if(isset($_SESSION['username'])) {
  echo "Your session is running " . $_SESSION['username'];
}


//$result = mysqli_query($db,"SELECT * FROM listing,residential LEFT JOIN listing ON .Luser_id = residential.List_id");
//$result = mysqli_query($db,"SELECT * FROM listing,residential");
$result = mysqli_query($db,"select listing.Ad_title, listing.Property_type, listing.Price, listing.Availibility, listing.Description, listing.Unit_no, listing.street, listing.city, listing.Postalcode, listing.Legal_documentation, listing.Contract, residential.Unit_type, residential.Bedrooms, residential.Baths, residential.Under_18, residential.Parking, residential.Size from listing, residential where listing.List_id = residential.List_id");


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
<th>Unit Type</th>
<th>Bedrooms</th>
<th>Bathrooms</th>
<th>Under 18 allowed?</th>
<th>Parking</th>
<th>Size</th>
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
echo "<td>" . $row['Unit_type'] . "</td>";
echo "<td>" . $row['Bedrooms'] . "</td>";
echo "<td>" . $row['Baths'] . "</td>";
echo "<td>" . $row['Under_18'] . "</td>";
echo "<td>" . $row['Parking'] . "</td>";
echo "<td>" . $row['Size'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>