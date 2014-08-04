<?php
// Create connection
$con=mysqli_connect("localhost","student","student","autovlasnik");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"SELECT * FROM servis,vozilo where vozilo.id = servis.idauto order by tip");

echo "<table>
<tr>
<th>Tip</th>
<th>cc</th>
<th>imeservisa</th>
<th>datum</th>
<th>cena servisa</th>
<th>tipservisa</th>
<th>komentar</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['tip'] . "</td>";
  echo "<td>" . $row['cc'] . "</td>";
  echo "<td>" . $row['imeservisa'] . "</td>";
  echo "<td>" . $row['datums'] . "</td>";
  echo "<td>" . $row['cenas'] . "</td>";
  echo "<td>" . $row['tipservisa'] . "</td>";
  echo "<td>" . $row['komentars'] . "</td>";
  echo "</tr>";
  
  }
echo "</table>";
mysqli_close($con);
?> 