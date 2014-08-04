<?php
// Create connection
$con=mysqli_connect("localhost","student","student","autovlasnik");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
mysqli_query($con,"INSERT INTO popravka (idpop,idauto,majstor,cenap,datump,izvpop)
VALUES ('$_POST[idpop]','$_POST[idauto]','$_POST[majstor]','$_POST[cenap]','$_POST[datump]','$_POST[izvpop]')");

mysqli_close($con);
header( 'Location: index.html' ) ;

?> 