<?php
// Create connection
$con=mysqli_connect("localhost","student","student","autovlasnik");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"SELECT * FROM gorivo");

echo "<table>
<tr>
<th>Gorivo u litrima</th>
<th>Cena goriva u &euro;</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['litar'] . "</td>";
  echo "<td>" . $row['cenag'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?> 