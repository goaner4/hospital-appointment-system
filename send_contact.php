<?php
//connection to the databse
include_once 'Server_connection.php';

//get value
$da = $_POST['id'];
$db = $_POST['fname'];
$dc = $_POST['email'];
$dd = $_POST['phone'];
$de = $_POST['message'];

//inserting into my table
$mysql = "INSERT INTO contact_dt(id,fname,email,phone,message) VALUES('$da', '$db', '$dc', '$dd', '$de')" or die("never wake up");
$done = mysql_query($mysql) or die("Cannot");

header('location:index.php');
?>