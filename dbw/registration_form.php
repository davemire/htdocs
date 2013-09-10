<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
 <script type="text/javascript">
    function validateForm()
    {
	
    var a=document.forms["form2"]["txtUser"].value;
    var b=document.forms["form2"]["txtPassword"].value;

    if ((a==null || a=="") && (b==null || b==""))
    {
    alert("All Field must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("Username must be filled out");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Password must be filled out");
    return false;
    }
    }
    </script>
</head>
 
<body>
<a href="view-source:http://localhost/dbw/registration_form.php">
View Source</a>
<table width="200" border="0" align="center">
<form name="form2" action="registration_script.php" onsubmit="return validateForm()" method="post">
<tr>
<td colspan="2"><h2 style="color:#FF0000">Registration Form</h2></td>
</tr>
<tr>
<td>UserName:</td>
<td>
<input type="text" name="txtUser" id="txtUser" />
 
</td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="txtPassword" id="txtPassword" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="btnRegister" id="btnRegister" value="Register" />
 
</td>
</tr>
</form>
</table>

<p> Phil's Houses 2012 </p>
</body>
</html>