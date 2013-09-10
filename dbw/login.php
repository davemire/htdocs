<html>
<?php
 
//Server Information to establish a connection 
 
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'estateagent';
 
//server connection
$link = mysql_connect($host,$user,$password) or die('Error in Server information');
//db selection
mysql_select_db($db,$link) or die('Can not Select Database');
 
 
$userName = mysql_real_escape_string($_POST['username']); //User Name sent from Form
$password = mysql_real_escape_string($_POST['password']); // Password sent from Form
 
//database retrieve**
 
$query = "select * from tbladmin where admin_usr_name='$userName' and admin_pdw='$password'";
 
$res = mysql_query($query); 
 
//validation
 
$rows = mysql_num_rows($res);
 

 
if($rows==1)
 

{
$_SESSION['userName'];
$_SESSION['password'];
header("location:cd.php");
}
else
{
echo '<h2>Please log in again with correct details <br /> </h2>';

echo '<a href="login_form.php"> Login</a>';

echo '<p>Phils Houses 2012 <br /> </p>';

}
 
  
 
?>
<a href="view-source:http://localhost/dbw/login.php">View Source</a>
</html>