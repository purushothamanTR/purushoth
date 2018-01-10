<?php
function Connect()
{
 $dbhost = "10.10.40.59";
 $dbuser = "root";
 $dbpass = "pass123$";
 $dbname = "testdb";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 return $conn;
}
 
?>