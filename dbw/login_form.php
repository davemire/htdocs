<html>
<head>

	<link rel="stylesheet" href="css/style.css" type="text/css" />
	 <script type="text/javascript">
    function validateForm()
    {
	
    var a=document.forms["form1"]["username"].value;
    var b=document.forms["form1"]["password"].value;

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
</table>



<p> Phil's Houses 2012 </p>
<a href="view-source:http://localhost/dbw/login_form.php">
View Source</a>
</body>
 
</html>