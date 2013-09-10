<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<?php
session_start();
if($_SESSION['userName']!='')
{
header("location:login_form.php");
}
else
{
echo '<h2>Successfully Login <br /> Welcome </h2>';
 echo '<a href="cd.php"> Successful Login</a>';
}
 
  
 
?>

</html>

