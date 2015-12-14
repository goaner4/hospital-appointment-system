<?php
include ("connection.php");
// $connect=mysql_connect($servername,$username,$password);
// $select_db=mysql_select_db($databasename);

$strquery="DELETE from apointment where id = '" . $_GET['id'] . "' ";

$results=mysql_query ($strquery);
echo 'Delete Successfull!!<br/><a href="apointment_view.php">Go Back to the Main Page <a>';
?>
