<?php
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name=""; // Database name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 

mysql_select_db("$db_name")or die("cannot select DB");

session_start();
?>
