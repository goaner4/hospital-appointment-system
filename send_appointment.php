<?php
//connection to the databse
include_once 'Server_connection.php';

//get value
$da = $_POST['id'];  	 
$db = $_POST['fname'];	 	
$dc = $_POST['lname'];
$de = $_POST['age'];
$df = $_POST['adress'];
$di = $_POST['contact'];	 
$dj = $_POST['email'];
$dk = $_POST['date'];
$dl = $_POST['humain'];
$dm = $_POST['nature'];

//inserting into my table
$mysql = "INSERT INTO apointment(id,fname,lname,age,adress,contact,email,date,humain,nature ) VALUES('$da', '$db', '$dc', '$de', '$df', '$di', '$dj', '$dk', '$dl', '$dm')" or die("never wake up");
$done = mysql_query($mysql) or die("Cannot");

header('location:index.php');
?>