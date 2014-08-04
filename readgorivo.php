<?php
// Create connection
$con=mysqli_connect("localhost","student","student","autovlasnik");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"SELECT * FROM gorivo");

$num1=array();
$num2=array();
$x=0;
$y=0;
while($row = mysqli_fetch_array($result))
  {
  $num1[$x]=$row['litar'];
  $x=$x+1;
  $num2[$y]=$row['cenag'];
  $y=$y+1;
  }

mysqli_close($con);
?> 