<?php
//connection info
$host        =    'localhost';
$user        =    'root';
$password    =    '';
//db info
$database    =    'estateagent';
$tbl_name    =    'tbladmin';
 
$conn        =    mysql_connect($host,$user,$password) or die('Server Information is not Correct'); //Establish Connection with Server
mysql_select_db($database,$conn) or die('Database Information is not correct');
 


 
$userName    =    mysql_real_escape_string($_POST['txtUser']);
 
$password    =    mysql_real_escape_string($_POST['txtPassword']);
 
//password encryption

$password    =    md5($password);

 
if(isset($_POST['btnRegister'])) 
{
$query    =    "insert into tbladmin(admin_usr_name,admin_pdw)values('$userName','$password')";
$res    =    mysql_query($query);
header('location:success_register.php');
}
 
?>