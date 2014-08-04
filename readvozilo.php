<?php
// Create connection
$con=mysqli_connect("localhost","student","student","autovlasnik");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"SELECT * FROM vozilo");

echo "<table>
<tr>
<th>id</th>
<th>Tip</th>
<th>cc</th>
<th>Godina proizvodnje</th>
<th>Snaga</th>
<th>Boja</th>
<th>Cena</th>
<th>Komentar</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['tip'] . "</td>";
  echo "<td>" . $row['cc'] . "</td>";
  echo "<td>" . $row['godpr'] . "</td>";
  echo "<td>" . $row['snaga'] . "</td>";
  echo "<td>" . $row['boja'] . "</td>";
  echo "<td>" . $row['cena'] . "</td>";
  echo "<td>" . $row['komentar'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?> 