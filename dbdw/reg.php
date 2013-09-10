<?php
include("dblogin.php");
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
 
{
//Prevent SQL injections
$username = mysql_real_escape_string($_POST['username']);
$email = mysql_real_escape_string($_POST['email']);
 
 
//Get MD5 hash of password
$password = md5($_POST['password']);
 
//Check to see if username exists
$sql = mysql_query("SELECT username FROM usersystem WHERE username = '".$username."'");
if (mysql_num_rows($sql)>0)
{
die ("Username taken.");
}
 
 
mysql_query("INSERT INTO usersystem (username, password, email) VALUES ( '$username', '$password', '$email')") or die (mysql_error()); echo "Account created.";)
 
}
?>
 
<html></html>
<form action="register.php" method="post">
Username: <input name="username" type="text" />
Password: <input type="password" name="password" />
Email: <input name="email" type="text" />
<input type="submit" value="Submit" />
</form>
 