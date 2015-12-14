<?php
//connect to the server
if(!mysql_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
//connect to the database
if(!mysql_select_db("slau_registration"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>