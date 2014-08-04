<?php
// Create connection
$con=mysqli_connect("localhost","student","student","autovlasnik");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
mysqli_query($con,"INSERT INTO gorivo (litar,cenag)
VALUES ('$_POST[litar]','$_POST[cenag]')");

mysqli_close($con);
header( 'Location: unospotrosnja.php' ) ;

?> 