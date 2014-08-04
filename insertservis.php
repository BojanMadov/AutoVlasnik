<?php
// Create connection
$con=mysqli_connect("localhost","student","student","autovlasnik");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
mysqli_query($con,"INSERT INTO servis (idservis,idauto,datums,imeservisa,cenas,tipservisa,komentars)
VALUES ('$_POST[idservis]','$_POST[idauto]','$_POST[datums]','$_POST[imeservisa]','$_POST[cenas]','$_POST[tipservisa]','$_POST[komentars]')");

mysqli_close($con);
header( 'Location: index.html' ) ;

?> 