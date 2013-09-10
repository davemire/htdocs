<?php
	session_start();
?>

<?php
	include("dblogin.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Sound Control</title>

	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>


	<div id="container">

	<div id="top">

<h1>Home Page</h1>
	

	<div id="leftnav">



<form action="login.php" method="post">
Username: <input name="username" type="text" />
Password: <input type="password" name="password" />
<input type="submit" value="Login" />
<input type="hidden" name="submitted" value="TRUE" />
</form>

	</div>

	<div id="content">

<h2>	Welcome to Phil's Housing Solutions!	</h2>

	<p>
		Your one stop shop for all your housing needs.
	</p>

	<p>
		Please login by entering your details in the login area or register your details if you are a new user. 
	</p>



</div>


</body>

</html>