<html>
<?php
mysql_connect("localhost", "root", "") or die("Connection Failed");
mysql_select_db("estateagent")or die("Connection Failed");
$user = $_POST['user'];
$password = $_POST['userpassword'];
$query = "UPDATE tbladmin SET admin_pdw = '$password' WHERE admin_usr_name = '$user'";
if(mysql_query($query))
{
echo '<a href="home.php"> UPDATED</a>';
}
else
{
echo "fail";
}

?>

<a href="view-source:http://localhost/dbw/home.php">View Source</a>

</html>