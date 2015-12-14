<?php
$servername="localhost";
$username="root";
$password="";
$databasename="slau_registration";

$connect=mysql_connect($servername,$username,$password) or die("Unable to connect to The Server");
$select_db=mysql_select_db($databasename)or die("Unable to connect to The Server");
?>
