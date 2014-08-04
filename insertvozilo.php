<?php
// Create connection
$con=mysqli_connect("localhost","student","student","autovlasnik");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
mysqli_query($con,"INSERT INTO vozilo (id,tip,cc,godpr,snaga,boja,cena,komentar)
VALUES ('$_POST[id]','$_POST[tip]','$_POST[cc]','$_POST[godpr]','$_POST[snaga]','$_POST[boja]','$_POST[cena]','$_POST[komentar]')");

mysqli_close($con);
header( 'Location: index.html' ) ;

?> 