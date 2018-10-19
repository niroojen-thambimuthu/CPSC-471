<?php
// connect to your database
include ("config.php");
   session_start();
if(isset($_SESSION['username'])) {
  echo "Your session is running " . $_SESSION['username'];
}


//$result = mysqli_query($db,"SELECT * FROM listing,residential LEFT JOIN listing ON .Luser_id = residential.List_id");
//$result = mysqli_query($db,"SELECT * FROM listing,residential");
$result = mysqli_query($db,"select listing.Ad_title, listing.Property_type, listing.Price, listing.Availibility, listing.Description, listing.Unit_no, listing.street, listing.city, listing.Postalcode, listing.Legal_documentation, listing.Contract, office.size, office.Floor, office.Amenities, office.oppurtunities, office.Unit_type, office.Capacity, office.Parking, office.Other from listing, office where listing.List_id = office.List_id");


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
<th>Size</th>
<th>Floors</th>
<th>Amenities</th>
<th>Oppurtunities</th>
<th>Unit Type</th>
<th>Capacity</th>
<th>Parking</th>
<th>Other</th>
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
echo "<td>" . $row['size'] . "</td>";
echo "<td>" . $row['Floor'] . "</td>";
echo "<td>" . $row['Amenities'] . "</td>";
echo "<td>" . $row['oppurtunities'] . "</td>";
echo "<td>" . $row['Unit_type'] . "</td>";
echo "<td>" . $row['Capacity'] . "</td>";
echo "<td>" . $row['Parking'] . "</td>";
echo "<td>" . $row['Other'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>