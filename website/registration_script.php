<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="customers"; // Database name
$tbl_name="members"; // Table name
 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

//===============End Server Configuration============
 
//=============Starting Registration Script==========
 
$userName    =    mysql_real_escape_string($_POST['txtUser']);
 
$password    =    mysql_real_escape_string($_POST['txtPassword']);
 
//=============To Encrypt Password===================
$password    =    md5($password);
//============New Variable of Password is Now with an Encrypted Value========
 
if(isset($_POST['btnRegister'])) //===When I will Set the Button to 1 or Press Button to register
{
$query    =    "insert into tbladmin(admin_usr_name,admin_pwd)values('$userName','$password')";
$res    =    mysql_query($query);
header('location:success_register.php');
}
 
?>