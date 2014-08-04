<?php
// Create connection
$con=mysqli_connect("localhost","student","student","autovlasnik");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"SELECT * FROM popravka,vozilo where vozilo.id = popravka.idauto order by datump");

echo "<table>
<tr>
<th>Datum</th>
<th>Tip</th>
<th>Godina proizvodnje</th>
<th>Majstor</th>
<th>Cena</th>
<th>komentar</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['datump'] . "</td>";
  echo "<td>" . $row['tip'] . "</td>";
  echo "<td>" . $row['godpr'] . "</td>";
  echo "<td>" . $row['majstor'] . "</td>";
  echo "<td>" . $row['cenap'] . "</td>";
  echo "<td>" . $row['izvpop'] . "</td>";
  echo "</tr>";
  
  }
echo "</table>";
mysqli_close($con);
?> 