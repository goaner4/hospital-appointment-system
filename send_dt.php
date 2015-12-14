<?php
//connection to the databse
include_once 'Server_connection.php';

//get value
$da = $_POST['id'];
$db = $_POST['fname'];
$dc = $_POST['email'];
$de = $_POST['phone'];
$df = $_POST['problem'];

//inserting into my table
$mysql = "INSERT INTO about_us(id,fname,email,phone,problem) VALUES('$da', '$db', '$$dc', '$de', '$df ')" or die("never wake up");
$done = mysql_query($mysql) or die("Cannot");

header('location:index.php');
?>