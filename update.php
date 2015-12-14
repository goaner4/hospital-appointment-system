<?php
include ("connection.php");


$strquery="INSERT INTO apointment SET fname= '" .$_GET['fname'] . "', lname= '". $_GET['lname'] ."', age= '". $_GET['age'] ."', adress= '". $_GET['adress'] ."', contact= '". $_GET['contact'] ."', email= '". $_GET['email'] ."' ";
$results=mysql_query ($strquery);

header ('location:admin.php'); 

?>
