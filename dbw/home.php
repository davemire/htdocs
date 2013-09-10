
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>PHILS HOUSES</title>
	

	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>


	<div id="container">

	<div id="top">
<h1>Home Page</h1>
<?php 
	
	if($_SESSION['userName']!='')
{
header("location:login_form.php");
 
}
	
?>

	</div>
	
	<div id="linkbar">
<table>	
 
<tr>	
	<td><a href="home.php"> Homepage </a></td> <a href="view-source:http://localhost/dbw/home.php">View Source</a>
</tr>
 
</table>
	

	
	</div>

<div id="leftnav">

	<table width="200" border="0" cellspacing="1" align="center">
	<form name="form1" action="login.php" onsubmit="return validateForm()" method="post">
		<tr>
		<td colspan="2"><h2>Members Login</h2></td>
		</tr>
<tr>
<td>UserName:</td>
<td>
<input type="text" name="username" id="username" />
 
</td>
</tr>
<tr>
<td>Password:</td>
		<td><input type="password" name="password" id="password" /></td>
</tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" name="btnSubmit" id="btnSubmit" value="Log In" />
		
 
</td>
</tr>
				

</form>

	<FORM METHOD="LINK" ACTION="registration_form.php">
		<INPUT TYPE="submit" VALUE="Register">
		</FORM>
		

</table>
	

	</div>
	

	
	<div id="content">
		
<h2>Welcome to Phils Houses</h2>
	<p>
Your one stop shop for all your housing needs.
	</p>
	<p>
Please login by entering your details in the login area. 
	</p>

	</div>



</div>



</body>

</html>